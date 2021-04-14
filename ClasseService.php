<?php



include_once 'classe/Classe.php';
include_once 'connexion/Connexion.php';
include_once  'idao/IDao.php';

class ClasseService implements IDao {

    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO Classe VALUES (NULL,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getClasse(),$o->getFiliere() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM Classe WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from Classe";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    
      public function getAll() {
        $query = "select * from Classe";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_ASSOC);
        return $f;
    }
    

    public function findById($id) {
        $query = "select * from Classe where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new Classe($res->id,$res->classe, $res->filiere);
        return $fonction;
    }

      public function findByCode($filiere) {
        $query = "select * from Classe where filiere =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($filiere));  
        $f= $req->fetchAll(PDO::FETCH_ASSOC);
        return $f;
      }
     public function findByIdApi($id) {
        $query = "select * from Classe where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE Classe SET classe = ?,filiere=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getClasse(),$o->getFiliere(), $o->getId())) or die('Error');       
    }

}
