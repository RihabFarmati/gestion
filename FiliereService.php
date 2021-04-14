<?php

// chdir('..');
include_once 'classe/Filiere.php';
include_once 'connexion/Connexion.php';
include_once   'idao/IDao.php';




class FiliereService implements IDao {
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO Filiere VALUES (NULL,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getCode(),$o->getLibelle() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM Filiere WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from Filiere";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    
      public function getAll() {
        $query = "select * from Filiere";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_ASSOC);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from Filiere where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new Filiere($res->id,$res->code, $res->libelle);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from Filiere where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE Filiere SET libelle = ?,code=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getLibelle(),$o->getCode(), $o->getId())) or die('Error');       
    }

}
