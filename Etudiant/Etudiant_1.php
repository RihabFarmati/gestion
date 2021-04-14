<?php


class Etudiant {
    private $id;
    private $cin;
    private $nom;
    private $prenom;
    private $email;
    private $psw;
    private $telephone;
    private $filiere;
    private $classe;

    function __construct($id,$cin, $nom, $prenom, $email,$psw,$telephone,$filiere, $classe) {
        $this->id = $id;
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->psw = $psw;
        $this->telephonee = $telephone;
    
        $this->filiere = $filiere;
        $this->classe = $classe;
    }
  
    function getId() {
        return $this->id;
    }
  function getCin() {
        return $this->cin;
    }
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getEmail() {
        return $this->email;
    }
function getPsw() {
        return $this->psw;
    }
    function getTelephone() {
        return $this->telephone;
    }
    

    function getFiliere() {
        return $this->filiere;
    }
    
    function getClasse() {
        return $this->classe;
    }
    function setId($id) {
        $this->id = $id;
    }
function setCin($cin) {
        $this->cin = $cin;
    }
    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }
   
    function setClasse($classe) {
        $this->classe = $classe;
    }
    function setFiliere($filiere) {
        $this->filiere = $filiere;
    }

    public function __toString() {
        return $this->nom . " " . $this->prenom;
    }

}

