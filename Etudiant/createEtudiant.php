<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once 'racine.php';
    include_once RACINE.'/EtudiantService.php';
    create();
}
function create(){
    extract($_POST);
    $es = new EtudiantService();
    $es->create(new Etudiant(1,$cin, $nom, $prenom, $email,$psw, $telephone,$filiere,$classe));
}



