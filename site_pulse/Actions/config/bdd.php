<?php
$host = 'localhost';
$dbname = 'pulse_showcase';
$user = 'u243388443_pulse'; // Remplace par ton utilisateur MySQL // id en local : localhos
$password = 'G4|z[^*F[NU'; // Remplace par ton mot de passe MySQL  // mdp en local : root

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'TEST';
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}