<?php
include_once 'racine.php';
include_once  'classe/user.php';
include_once 'connexion/connexion.php';

class userService  {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }
    public function create($o) {
        $query = "INSERT INTO `user`(`email`, `psw`) "
                . "VALUES (?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getEmail(),$o->getPsw())) or die('Error');
    }

    public function delete($id) {
        $query = "DELETE FROM user WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }


    public function findById($id) {
        $query = "select * from user where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $res = $req->fetch(PDO::FETCH_OBJ);
        $employe = new user($res->id, $res->email, $res->psw);
        return $employe;
    }

    public function findByEmail($email) {
        $query = "select * from user where email =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($email));
        $s = $req->fetchAll(PDO::FETCH_OBJ);
        if (count($s) != 0) {
            foreach ($s as $res) {
                $id = $res->id;
        }
            return $id;
        } else
            return -1;


    }
}
