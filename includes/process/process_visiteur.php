<?php
require_once '../class_visiteur.php';

$visiteur = new Visiteur();

/*----- Ajout d'un nouvel evènement-----*/
if (isset($_POST['Ajouter'])) {

    $visiteur_nom = $_POST['nom'];
    $visiteur_prenom = $_POST['prenom'];
    $visiteur_mail = $_POST['mail'];

    $visiteur->ajouter(
        $visiteur_nom,
        $visiteur_prenom,
        $visiteur_mail
    );
    /*Affiche le résultat de la requête dans ""*/
    header('location:../../vues/visiteur_ajout.php');
}


if (isset($_POST['Modifier'])) {

    $visiteur_id = $_POST['id'];
    $visiteur_nom = $_POST['nom'];
    $visiteur_prenom = $_POST['prenom'];
    $visiteur_mail = $_POST['mail'];

    $visiteur->modifier(
        $visiteur_nom,
        $visiteur_prenom,
        $visiteur_mail,
        $visiteur_id
    );
    header('location:../../vues/visiteur_liste.php');
}

/*----- Suppression d'un appel-----*/ else if (isset($_GET['Supprimer'])) {
    $visiteur_id = $_GET['Supprimer'];
    $visiteur->supprimer($visiteur_id);

    header('location:../../vues/visiteur_liste.php');
}

/*----- Vider le contenu des champs-----*/
if (isset($_POST['Effacer'])) {
    $visiteur_id = "";
    $visiteur_nom = "";
    $visiteur_prenom = "";
    $visiteur_mail = "";

    header('location:../../vues/visiteur_ajout.php');
}

/*----- Annuler la modification-----*/
if (isset($_POST['Annuler'])) {
    header('location:../../vues/visiteur_liste.php');
}
