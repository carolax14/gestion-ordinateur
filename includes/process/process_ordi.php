<?php
require_once '../class_ordi.php';

$ordi = new Ordinateur();


/*----- Ajout d'un nouvel evènement-----*/
if (isset($_POST['Ajouter'])) {

    $ordi_libelle = $_POST['libelle'];

    $ordi->ajouter(
        $ordi_libelle
    );
    /*Affiche le résultat de la requête dans ""*/
    header('location:../../vues/ordi_ajout.php');
}


if (isset($_POST['Modifier'])) {

    $ordi_id = $_POST['id'];
    $ordi_libelle = $_POST['libelle'];

    $ordi->modifier(
        $ordi_libelle,
        $ordi_id
    );
    header('location:../../vues/ordi_liste.php');
}

/*----- Suppression d'un appel-----*/ else if (isset($_GET['Supprimer'])) {
    $ordi_id = $_GET['Supprimer'];
    $ordi->supprimer($ordi_id);

    header('location:../../vues/ordi_liste.php');
}

/*----- Vider le contenu des champs-----*/
if (isset($_POST['Effacer'])) {
    $ordi_id = "";
    $ordi_libelle = "";


    header('location:../../vues/ordi_ajout.php');
}

/*----- Annuler la modification-----*/
if (isset($_POST['Annuler'])) {
    header('location:../../vues/ordi_liste.php');
}
