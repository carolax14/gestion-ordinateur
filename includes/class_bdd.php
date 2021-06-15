<?php

class Bdd
{
    private $serveur = 'mysql:dbname=simplon;host=localhost';
    private $user = 'root';
    private $mdp = '';

    public function connexion()
    {
        $pdo = new PDO($this->serveur, $this->user, $this->mdp);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("set names utf8");

        return $pdo;
    }
}
