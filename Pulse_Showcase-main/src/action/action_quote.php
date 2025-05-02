<?php
session_start(); // Commencer la session

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require(getenv('FPDF_PATH') ?: '../../../vendor/setasign/fpdf/fpdf.php');
require getenv('DB_CONFIG_PATH') ?: '../action/config/bdd.php'; // Connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Validation du choix pour le formulaire
        if (!isset($_POST['choice'])) {
            throw new Exception("Certains champs obligatoires sont manquants.");
        }

        // Vérification que le choix n'a bien que 2 choix
        $allowedChoices = ['rendez-vous', 'question'];
        $choice = in_array($_POST['choice'], $allowedChoices) ? htmlspecialchars($_POST['choice'], ENT_QUOTES) : null;
        if (!$choice) {
            throw new Exception("Le choix est invalide.");
        }

        // Variables communes
        $emailContact = filter_var($_POST['email_contact'], FILTER_VALIDATE_EMAIL);
        if (!$emailContact) {
            throw new Exception("Adresse e-mail invalide.");
        }

        $telephone = htmlspecialchars($_POST['telephone'], ENT_QUOTES);
        if (!preg_match('/^\+?[0-9\s\-\(\)]{10,20}$/', $telephone)) {
            throw new Exception("Le numéro de téléphone est invalide.");
        }

        // Traitement spécifique selon le choix
        if ($choice == 'rendez-vous') {
            // Validation des champs pour le rendez-vous
            if (!isset($_POST['etablissement'], $_POST['sites'], $_POST['etudiants'], $_POST['disponibilites'])) {
                throw new Exception("Certains champs obligatoires pour le rendez-vous sont manquants.");
            }

            $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);
            $prenom = htmlspecialchars($_POST['prénom'], ENT_QUOTES);
            $etablissement = htmlspecialchars($_POST['etablissement'], ENT_QUOTES);
            $sites = htmlspecialchars($_POST['sites'], ENT_QUOTES);
            $etudiants = !empty($_POST['etudiants']) ? (int)$_POST['etudiants'] : null;
            $disponibilites = isset($_POST['disponibilites']) ? htmlspecialchars($_POST['disponibilites'], ENT_QUOTES) : null;
            $message = "pas de message";
            $requestQuote = isset($_POST['request_quote']) ? 1 : 0;

            // Insertion en base
            $stmt = $pdo->prepare("INSERT INTO devis_requests (Nom, Prenom, choice, etablissement, sites, etudiants, email_contact, telephone, disponibilites, request_quote, message, created_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");

            // Vérification de l'insertion en base
            if (!$stmt->execute([$nom, $prenom, $choice, $etablissement, $sites, $etudiants, $emailContact, $telephone, $disponibilites, $requestQuote, $message])) {
                throw new Exception("L'insertion dans la table devis_requests pour le rendez-vous a échoué.");
            }

        } elseif ($choice == 'question') {
            // Validation des champs pour une question
            if (!isset($_POST['message'])) {
                throw new Exception("Le message est obligatoire pour une question.");
            }

            $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);
            $prenom = htmlspecialchars($_POST['prénom'], ENT_QUOTES);
            $message = htmlspecialchars($_POST['message'], ENT_QUOTES);

            // Compléter les valeurs par défaut pour les autres champs
            $etablissement = null;
            $sites = 0;
            $etudiants = 0;
            $disponibilites = null;
            $requestQuote = 0;
            
            // Insertion en base
            $stmt = $pdo->prepare("INSERT INTO devis_requests (Nom, Prenom, choice, etablissement, sites, etudiants, email_contact, telephone, disponibilites, request_quote, message, created_at)
                                   VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");

            // Vérification de l'insertion en base         
            if (!$stmt->execute([$nom, $prenom, $choice, $etablissement, $sites, $etudiants, $emailContact, $telephone, $disponibilites, $requestQuote, $message])) {
                throw new Exception("L'insertion dans la table devis_requests pour une question a échoué.");
            }
        }

        // -- PARTIE MAIL VIA NODE.JS --
        // Construire la commande pour appeler le script Node.js
        $nodePath = "C:\\laragon\\bin\\nodejs\\node-v20.17.0\\node.exe"; // Chemin vers Node.js
        $scriptPath = realpath(__DIR__ . "/../js/sendmail.js"); // Résolution absolue du chemin du script
        $command = escapeshellcmd("$nodePath $scriptPath " .
            escapeshellarg($emailContact) . " " .
            escapeshellarg($nom) . " " .
            escapeshellarg($prenom) . " " .
            escapeshellarg($telephone) . " " .
            escapeshellarg($choice) . " " .
            escapeshellarg($message)
        );

        // Débogage : Afficher la commande générée
        error_log("Commande Node.js : " . $command);

        // Exécuter la commande Node.js
        $output = shell_exec($command);

        // Débogage : Afficher la sortie de la commande
        error_log("Sortie de la commande : " . $output);

        // Vérifier si l'email a été envoyé avec succès
        if ($output && strpos($output, 'Email envoyé') !== false) {
            $_SESSION['status'] = 'success';
            $_SESSION['message'] = 'Formulaire envoyé avec succès et email envoyé !';
        } else {
            // Débogage : Si échec, afficher les détails dans un log
            error_log("Erreur lors de l'envoi de l'email : " . $output);
            throw new Exception('L\'email n\'a pas pu être envoyé. Sortie : ' . $output);
        }

        // -- FIN PARTIE MAIL VIA NODE.JS --


        // Redirection en cas de succès
        header("Location: ../html/index.php?status=" . urlencode($_SESSION['status']));
        exit;

    } catch (Exception $e) {
        // Gestion des erreurs
        $_SESSION['status'] = 'error';
        $_SESSION['message'] = $e->getMessage();

        // Redirection en cas d'erreur
        header("Location: ../html/index.php?" . $_SESSION['status']);
        exit;
    }
}
?>