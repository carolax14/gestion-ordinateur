<?php
require_once 'class_bdd.php';

class Visiteur extends Bdd
{

    //Affiche la liste de tous les visiteurs
    public function getVisiteur()
    {
        $query = "SELECT * FROM visiteur";
        $stmt = $this->connexion()->prepare($query);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }

    //Récupère les informations d'un visiteur sélectionné
    public function getInfoUnVisiteur($visiteur_id)
    {
        $query = "SELECT * FROM visiteur WHERE visiteur_id=?";
        $stmt = $this->connexion()->prepare($query);
        $stmt->execute([$visiteur_id]);
        $result = $stmt->fetch();

        return $result;
    }


    public function ajouter(
        $visiteur_nom,
        $visiteur_prenom,
        $visiteur_mail

    ) {
        $query = "INSERT INTO  visiteur (`visiteur_nom`,`visiteur_prenom`,`visiteur_mail`)
        VALUES(?,?,?)";
        $stmt = $this->connexion()->prepare($query);
        $stmt->execute(
            [
                $visiteur_nom,
                $visiteur_prenom,
                $visiteur_mail
            ]
        );
    }

    //Modifie les informations d'un visiteur
    public function modifier(
        $visiteur_nom,
        $visiteur_prenom,
        $visiteur_mail,
        $visiteur_id
    ) {
        $query = "UPDATE visiteur SET visiteur_nom=?,visiteur_prenom=?,visiteur_mail=? WHERE visiteur_id= ? ";
        $stmt = $this->connexion()->prepare($query);
        $stmt->execute([
            $visiteur_nom,
            $visiteur_prenom,
            $visiteur_mail,
            $visiteur_id
        ]);
    }

    //Supprimer le visiteur selectionné
    public function supprimer($visiteur_id)
    {
        $query_delete = "DELETE FROM `visiteur` WHERE visiteur_id=$visiteur_id";
        $stmt_delete = $this->connexion()->prepare($query_delete);
        $stmt_delete->execute();
    }
}
