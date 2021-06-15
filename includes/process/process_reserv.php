<?php
require_once '../class_reserv.php';

$reserv = new Reservation();


/*----- Ajout d'un nouvel evènement-----*/
if (isset($_POST['Ajouter'])) {

    $reserv_mail = $_POST['mail'];
    $reserv_ordi = $_POST['ordi'];
    $reserv_date = $_POST['date'];
    $reserv_creneau = $_POST['creneau'];

    $reserv->ajouter(
        $reserv_mail,
        $reserv_ordi,
        $reserv_date,
        $reserv_creneau
    );


    /*Affiche le résultat de la requête dans ""*/
    header('location:../../vues/reserv_ajout.php');
}


if (isset($_POST['Modifier'])) {

    $reserv_id = $_POST['id'];
    $reserv_mail = $_POST['mail'];
    $reserv_ordi = $_POST['ordi'];
    $reserv_date = $_POST['date'];
    $reserv_creneau = $_POST['creneau'];

    $reserv->modifier(
        $reserv_mail,
        $reserv_ordi,
        $reserv_date,
        $reserv_creneau,
        $reserv_id
    );
    header('location:../../vues/reserv_ajout.php');
}

/*----- Suppression d'un appel-----*/ else if (isset($_GET['Supprimer'])) {
    $reserv_id = $_GET['Supprimer'];
    $reserv->supprimer($reserv_id);

    header('location:../../vues/reserv_ajout.php');
}

/*----- Vider le contenu des champs-----*/
if (isset($_POST['Effacer'])) {
    $reserv_mail = "";
    $reserv_ordi = "";
    $reserv_date = "";
    $reserv_creneau = "";


    header('location:../../vues/reserv_ajout.php');
}

/*----- Annuler la modification-----*/
if (isset($_POST['Annuler'])) {
    header('location:../../vues/reserv_ajout.php');
}
