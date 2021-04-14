<?php

class Classe {
    private $id;
    private $classe;
    private $filiere;
    
    function __construct($id,$classe,$filiere) {
        $this->id = $id;
        $this->classe =  $classe;
        $this->filiere = $filiere;
    }

    function getId() {
        return $this->id;
    }

    function getClasse() {
        return $this->classe;
    }

    function getFiliere() {
        return $this->filiere;
    }

  
    function setId($id) {
        $this->id = $id;
    }

    function setClasse($classe) {
        $this->classe = $classe;
    }

    function setFiliere($filiere) {
        $this->filiere=$filiere;
    }
}


