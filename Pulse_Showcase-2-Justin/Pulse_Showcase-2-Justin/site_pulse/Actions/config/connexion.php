<?php
$host = 'localhost';
$dbname = 'genpulse';
$user = 'root';
$password = 'Judave02='; // mot de passe vide en local sous Laragon/XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>