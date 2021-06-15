<?php
require_once 'class_bdd.php';

class Reservation extends Bdd
{

    //Affiche la liste de tous les visiteurs
    public function getReserv()
    {
        $query = "SELECT * FROM list_reservation";
        $stmt = $this->connexion()->prepare($query);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }

    //Récupère les informations d'un visiteur sélectionné
    public function getInfoUnReserv($reserv_id)
    {
        $query = "SELECT * FROM reservation WHERE id=?";
        $stmt = $this->connexion()->prepare($query);
        $stmt->execute([$reserv_id]);
        $result = $stmt->fetch();

        return $result;
    }


    public function ajouter(
        $reserv_mail,
        $reserv_ordi,
        $reserv_date,
        $reserv_creneau

    ) {

        try {
            $query = "INSERT INTO  reservation (`visiteur_id_fk`,`ordinateur_id_fk`,`date`,`creneau_id_fk`)
        VALUES(?,?,?,?)";
            $stmt = $this->connexion()->prepare($query);
            $stmt->execute(
                [
                    $reserv_mail,
                    $reserv_ordi,
                    $reserv_date,
                    $reserv_creneau
                ]
            );
        } catch (Exception $e) {
            echo 'Ce créneau horaire est indisponible ! ',  $e->getMessage(), "\n";
        }
    }

    //Modifie les informations d'un visiteur
    public function modifier(
        $reserv_mail,
        $reserv_ordi,
        $reserv_date,
        $reserv_creneau,
        $reserv_id
    ) {
        $query = "UPDATE reservation SET visiteur_id_fk=?, ordinateur_id_fk=?, date=?, creneau_id_fk=? WHERE id= ? ";
        $stmt = $this->connexion()->prepare($query);
        $stmt->execute([
            $reserv_mail,
            $reserv_ordi,
            $reserv_date,
            $reserv_creneau,
            $reserv_id
        ]);
    }

    //Supprimer le visiteur selectionné
    public function supprimer($reserv_id)
    {
        $query_delete = "DELETE FROM `reservation` WHERE id=$reserv_id";
        $stmt_delete = $this->connexion()->prepare($query_delete);
        $stmt_delete->execute();
    }
}
