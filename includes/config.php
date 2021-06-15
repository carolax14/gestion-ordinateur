<?php
$serveur = 'mysql:dbname=simplon;host=localhost';
$user = 'root';
$mdp = '';

try {
    $pdo = new PDO($serveur, $user, $mdp);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("set names utf8");
} catch (PDOException $e) {
    echo "Impossible de se connecter à la base de données" . $e->getMessage();
    die();
}
