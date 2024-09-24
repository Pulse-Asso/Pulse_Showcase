<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validation des champs
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Tous les champs doivent être remplis.']);
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'L\'adresse email est invalide.']);
        exit;
    }

    // Paramètres de l'e-mail
    $to = "pulse.pro.event@gmail.com"; // Adresse destinataire
    $headers = "From: " . $email . "\r\n" . "Reply-To: " . $email . "\r\n";
    $mail_subject = "Nouveau message de contact : " . $subject;
    $mail_message = "Nom: $name\nEmail: $email\nSujet: $subject\n\nMessage:\n$message";

    // Envoi de l'e-mail
    if (mail($to, $mail_subject, $mail_message, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Votre message a été envoyé avec succès.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Une erreur est survenue lors de l\'envoi de votre message.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Méthode non autorisée.']);
}
?>
