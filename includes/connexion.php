<?php
//On vérifie qu'une session n'est pas déja ouverte
/* if (session_status() == PHP_SESSION_NONE) {
    session_start();
} */

session_start();
require_once 'config.php';

$erreur = null;

if (isset($_POST['connexion'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];


    $query = "SELECT * FROM administrateur WHERE admin_login='$login' AND admin_mdp='$mdp' ";
    $result =  $pdo->prepare($query);

    $result->execute(array($login, $mdp));
    $row = $result->rowCount();
    $fetch = $result->fetch();

    if ($row > 0) {
        $db_password = $fetch['admin_mdp'];
        $_SESSION['nom'] = $fetch['admin_nom'];
        $_SESSION['prenom'] = $fetch['admin_prenom'];
        $_SESSION['id'] = $fetch['admin_id'];

        header("location:vues/home.php");
    } else {
        $erreur = "Nom d'utilisateur ou mot de passe incorrecte !";
    }
}
