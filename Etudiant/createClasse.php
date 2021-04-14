<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once 'racine.php';
    include_once RACINE.'/ClasseService.php';
    create();
}
function create(){
    extract($_POST);
    $es = new ClasseService();
    $es->create(new classe(1,$code, $id_filiere));
}



