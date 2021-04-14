<?php
include_once RACINE . '/Etudiant.php';
include_once RACINE . '/Connexion.php';
include_once RACINE . '/IDao.php';

class EtudiantService implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }
    public function select(){
        
    }
    public function create($o) {
        
        $query = "INSERT INTO Etudiant(`id`,`cin`, `nom`, `prenom`, `email`,`psw`, `telephone`, `filiere`, `classe`) "
                . "VALUES (NULL, '" . $o->getCin() . "', '" . $o->getNom() . "', '" . $o->getPrenom() . "', '" . $o->getEmail() . "', '" . $o->getPsw() . "', '" . $o->getTelephone() . "', '" . $o->getFiliere() . "', '" . $o->getClasse() . "');";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL hhh');
        
        
  
    }

    public function delete($o) {
        $query = "delete from Etudiant where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL ');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from Etudiant";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
         $etds[] = new Etudiant($e->id,$e->cin, $e->nom, $e->prenom, $e->email,$e->psw, $e->telephone,$e->filiere,$e->classe);
        }
        return $etds;
    }
    
    public function getAll() {
        $query = "select * from Etudiant";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
}


    public function findById($id) {
        $query = "select * from Etudiant where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd =  new Etudiant($e->id,$e->cin, $e->nom, $e->prenom, $e->email,$psw, $e->telephone,$e->filiere,$e->classe);
        }
        return $etd;
    }
        public function findByEmail($email) {
        $query = "select * from Etudiant where email = " . $email;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd =  new Etudiant($e->id,$e->cin, $e->nom, $e->prenom, $e->email,$psw, $e->telephone,$e->filiere,$e->classe);
        }
        return $etd;
    }


    public function update($o) {
        $query = "UPDATE `etudiant` SET `cin` = 'ttttttttttt',`nom` = 'tttttttttt', `prenom` = 'tttttttttttttttt', `email` = 'ttttttt', `telephone` = 'ttttt' WHERE `etudiant`.`id` = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }
}

