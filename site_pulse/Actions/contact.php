<?php
session_start();

/** --------- Utilitaires --------- **/
function getClientIp() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ipList[0]);
    } else {
        return $_SERVER['REMOTE_ADDR'] ?? 'inconnue';
    }
}

function redirect_with_status($status, $message = '') {
    $_SESSION['status'] = $status;
    if ($message !== '') {
        $_SESSION['message'] = $message;
    }
    header('Location: ../html/index.php?status=' . urlencode($status));
    exit;
}

function write_log($message) {
    $baseDir = dirname(__DIR__);
    $logDir  = $baseDir . '/logs';
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0775, true);
    }
    $line = '[' . date('c') . '] ' . $message . PHP_EOL;
    error_log($line); // PHP error log
    @file_put_contents($logDir . '/contact.log', $line, FILE_APPEND);
}

/** --------- Contrôles initiaux --------- **/
try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        redirect_with_status('error', 'Méthode non autorisée.');
    }

    // CSRF
    if (empty($_POST['csrf_token']) || empty($_SESSION['csrf_token']) || 
        !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        write_log('CSRF validation failed');
        redirect_with_status('error', 'Session expirée. Veuillez réessayer.');
    }

    // Honeypot (si tu utilises un input caché "hp_field")
    if (!empty($_POST['hp_field'])) {
        write_log('Honeypot triggered - spam probable');
        // On "fait semblant" que tout va bien pour ne rien révéler au bot
        redirect_with_status('success', 'Merci, votre demande a bien été envoyée.');
    }

    // Rate limiting simple
    $ip  = getClientIp();
    $now = time();
    $minInterval = 30; // secondes
    $last = $_SESSION['last_submit_time'][$ip] ?? 0;
    if ($now - $last < $minInterval) {
        redirect_with_status('error', 'Veuillez patienter quelques secondes avant une nouvelle soumission.');
    }
    $_SESSION['last_submit_time'][$ip] = $now;

    // Récup du choix
    $choice = isset($_POST['choice']) ? trim((string)$_POST['choice']) : '';
    if (!in_array($choice, ['rendez-vous', 'question'], true)) {
        redirect_with_status('error', 'Veuillez sélectionner une option valide.');
    }

    // Helpers validations
    $validateLength = function($value, $min, $max) {
        $len = mb_strlen($value);
        return $len >= $min && $len <= $max;
    };
    $validatePhone = function($value) {
        // tolérant, adapté à l’international
        return (bool)preg_match('/^(?:\+?\d{1,3}[ \-]?)?(?:\(?\d{1,4}\)?[ \-]?)?[0-9\-\.\s]{6,14}$/', $value);
    };

    /** --------- Normalisation des données --------- **/
    $data = [
        'choice'         => $choice,
        'nom'            => null,
        'prenom'         => null,
        'etablissement'  => null,
        'sites'          => null,
        'etudiants'      => null,
        'email_contact'  => null,         // IMPORTANT: correspond au nom de la colonne SQL
        'telephone'      => null,
        'disponibilites' => null,
        'message'        => null,
        'request_quote'  => 0,
        'ip_address'     => $ip,
    ];

    if ($choice === 'rendez-vous') {
        // Champs rendez-vous
        $data['nom']            = trim((string)($_POST['nom'] ?? ''));
        $data['prenom']         = trim((string)($_POST['prenom'] ?? ''));
        $data['etablissement']  = trim((string)($_POST['etablissement'] ?? ''));
        $data['sites']          = isset($_POST['sites']) ? (int)$_POST['sites'] : null;
        $data['etudiants']      = isset($_POST['etudiants']) ? (int)$_POST['etudiants'] : null;
        $data['email_contact']  = trim((string)($_POST['email_contact'] ?? ''));
        $data['telephone']      = trim((string)($_POST['telephone'] ?? ''));
        $data['disponibilites'] = trim((string)($_POST['disponibilites'] ?? ''));
        $data['request_quote']  = isset($_POST['request_quote']) ? 1 : 0;

        // Validations spécifiques
        if (!$validateLength($data['nom'], 2, 50) || !$validateLength($data['prenom'], 2, 50)) {
            redirect_with_status('error', 'Nom/Prénom doivent comporter entre 2 et 50 caractères.');
        }
        if (!$validateLength($data['etablissement'], 2, 255)) {
            redirect_with_status('error', "Le nom de l'établissement doit comporter entre 2 et 255 caractères.");
        }
        if (!filter_var($data['email_contact'], FILTER_VALIDATE_EMAIL)) {
            redirect_with_status('error', 'Adresse email invalide.');
        }
        if (!$validatePhone($data['telephone'])) {
            redirect_with_status('error', 'Numéro de téléphone invalide.');
        }
        if (!$validateLength($data['disponibilites'], 1, 500)) {
            redirect_with_status('error', 'Veuillez préciser vos disponibilités (max 500 caractères).');
        }
        if ($data['sites'] === null || $data['sites'] < 1 || $data['sites'] > 1000) {
            redirect_with_status('error', 'Nombre de sites invalide.');
        }
        if ($data['etudiants'] === null || $data['etudiants'] < 1 || $data['etudiants'] > 1000000) {
            redirect_with_status('error', "Nombre d'étudiants invalide.");
        }

    } else {
        // Champs question
        $data['nom']           = trim((string)($_POST['q_nom'] ?? ''));
        $data['prenom']        = trim((string)($_POST['q_prenom'] ?? ''));
        $data['email_contact'] = trim((string)($_POST['q_email'] ?? ''));     // on mappe sur email_contact
        $data['telephone']     = trim((string)($_POST['q_telephone'] ?? ''));
        $data['message']       = trim((string)($_POST['message'] ?? ''));

        // Forcer les champs rendez-vous à NULL
        $data['etablissement']  = null;
        $data['sites']          = null;
        $data['etudiants']      = null;
        $data['disponibilites'] = null;
        $data['request_quote']  = 0;

        // Validations spécifiques
        if (!$validateLength($data['nom'], 2, 50) || !$validateLength($data['prenom'], 2, 50)) {
            redirect_with_status('error', 'Nom/Prénom doivent comporter entre 2 et 50 caractères.');
        }
        if (!filter_var($data['email_contact'], FILTER_VALIDATE_EMAIL)) {
            redirect_with_status('error', 'Adresse email invalide.');
        }
        if (!$validatePhone($data['telephone'])) {
            redirect_with_status('error', 'Numéro de téléphone invalide.');
        }
        if (!$validateLength($data['message'], 1, 500)) {
            redirect_with_status('error', 'Veuillez saisir un message (max 500 caractères).');
        }
    }

    /** --------- Connexion DB --------- **/
    require_once 'config/connexion.php'; // doit définir $pdo (PDO)
    if (!isset($pdo) || !($pdo instanceof PDO)) {
        throw new RuntimeException('PDO non initialisé. Vérifiez /config/connexion.php');
    }

    /** --------- Insert unique (toutes colonnes) --------- **/
    $sql = "INSERT INTO requests 
        (choice, nom, prenom, etablissement, sites, etudiants, email_contact, telephone, disponibilites, message, request_quote, ip_address, created_at)
        VALUES 
        (:choice, :nom, :prenom, :etablissement, :sites, :etudiants, :email_contact, :telephone, :disponibilites, :message, :request_quote, :ip_address, NOW())";

    $stmt = $pdo->prepare($sql);

    // Bind robustes (NULL/int)
    $stmt->bindValue(':choice',         $data['choice']);
    $stmt->bindValue(':nom',            $data['nom']);
    $stmt->bindValue(':prenom',         $data['prenom']);
    $stmt->bindValue(':etablissement',  $data['etablissement']);
    $stmt->bindValue(':sites',          $data['sites'],      is_null($data['sites']) ? PDO::PARAM_NULL : PDO::PARAM_INT);
    $stmt->bindValue(':etudiants',      $data['etudiants'],  is_null($data['etudiants']) ? PDO::PARAM_NULL : PDO::PARAM_INT);
    $stmt->bindValue(':email_contact',  $data['email_contact']);
    $stmt->bindValue(':telephone',      $data['telephone']);
    $stmt->bindValue(':disponibilites', $data['disponibilites']);
    $stmt->bindValue(':message',        $data['message']);
    $stmt->bindValue(':request_quote',  $data['request_quote'], PDO::PARAM_INT);
    $stmt->bindValue(':ip_address',     $data['ip_address']);

    $stmt->execute();

    /** --------- (Optionnel) Envoi mail via Node --------- **/
    // $payload = [
    //     'to'      => 'pulse.pro.event@gmail.com',
    //     'subject' => ($choice === 'rendez-vous') ? 'Nouvelle demande de rendez-vous' : 'Nouvelle question via formulaire',
    //     'text'    => "Nouvelle soumission depuis IP {$ip}\n" . print_r($data, true),
    // ];
    // @exec('node ' . escapeshellarg(__DIR__ . '/sendmail.js') . ' ' . escapeshellarg(json_encode($payload)) . ' > /dev/null 2>&1 &');

    write_log("Insertion OK depuis IP {$ip} (choice={$choice})");
    redirect_with_status('success', 'Merci, votre demande a bien été envoyée.');

} catch (Throwable $e) {
    write_log('Error: ' . $e->getMessage());
    redirect_with_status('error', 'Une erreur est survenue. Merci de réessayer plus tard.');
}

// /** --------- Envoi mail via Node --------- **/

//     // Build email payload
//     $subject = ($choice === 'rendez-vous') ? 'Nouvelle demande de rendez-vous' : 'Nouvelle question via formulaire';
//     $lines = [];
//     foreach ($data as $k => $v) {
//         if ($k === 'ip_address') continue;
//         $lines[] = $k . ': ' . (is_scalar($v) ? (string)$v : json_encode($v));
//     }
//     $text = implode("\n", $lines) . "\nIP: " . $ip;

//     // Call Node mailer script (non-blocking)
//     $payload = [
//         'to' => 'pulse.pro.event@gmail.com',
//         'subject' => $subject,
//         'text' => $text,
//     ];
//     $cmd = 'node ' . escapeshellarg(__DIR__ . '/sendmail.js') . ' ' . escapeshellarg(json_encode($payload));
//     @exec($cmd . ' > /dev/null 2>&1 &');

//     write_log('Request stored and mail triggered for IP ' . $ip . ' type ' . $choice);
//     redirect_with_status('success', 'Merci, votre demande a bien été envoyée.');
// } catch (Throwable $e) {
//     write_log('Error: ' . $e->getMessage());
//     redirect_with_status('error', 'Une erreur est survenue. Merci de réessayer plus tard.');
// }