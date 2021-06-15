<?php
require_once 'class_bdd.php';

class Ordinateur extends Bdd
{

    //Affiche la liste de tous les visiteurs
    public function getOrdi()
    {
        $query = "SELECT * FROM ordinateur";
        $stmt = $this->connexion()->prepare($query);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }

    //Récupère les informations d'un visiteur sélectionné
    public function getInfoUnOrdi($ordi_id)
    {
        $query = "SELECT * FROM ordinateur WHERE ordi_id=?";
        $stmt = $this->connexion()->prepare($query);
        $stmt->execute([$ordi_id]);
        $result = $stmt->fetch();

        return $result;
    }


    public function ajouter(
        $ordi_libelle

    ) {
        $query = "INSERT INTO  ordinateur (`ordi_libelle`)
        VALUES(?)";
        $stmt = $this->connexion()->prepare($query);
        $stmt->execute(
            [
                $ordi_libelle
            ]
        );
    }

    //Modifie les informations d'un visiteur
    public function modifier(
        $ordi_libelle,
        $ordi_id
    ) {
        $query = "UPDATE ordinateur SET ordi_libelle=? WHERE ordi_id= ? ";
        $stmt = $this->connexion()->prepare($query);
        $stmt->execute([
            $ordi_libelle,
            $ordi_id
        ]);
    }

    //Supprimer le visiteur selectionné
    public function supprimer($ordi_id)
    {
        $query_delete = "DELETE FROM `ordinateur` WHERE ordi_id=$ordi_id";
        $stmt_delete = $this->connexion()->prepare($query_delete);
        $stmt_delete->execute();
    }
}
