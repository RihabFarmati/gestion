<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once 'racine.php';
    include_once RACINE.'/FiliereService.php';
    create();
}
function create(){
    extract($_POST);
    $es = new FiliereService();
    $es->create(new Filiere(1, $code, $libelle));
}


