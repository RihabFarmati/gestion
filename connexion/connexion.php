<?php


class connexion {

    private $connexion;

    public function __construct() {
        $host = 'localhost';
        $dbname = 'school1';
        $login = 'RIHAB';
        $password = '';
        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
            $this->connexion->query("SET NAMES UTF8"); //pour pouvoir introduire les caractère spèciaux
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    function getConnexion() {
        return $this->connexion;
    }

}

