<?php
$host = 'localhost';
$dbname = 'pulse_showcase';
$user = 'root'; // Remplace par ton utilisateur MySQL
$password = 'Judave02!'; // Remplace par ton mot de passe MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'TEST';
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}