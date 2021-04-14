<?php

//chdir('..');
include_once 'ClasseService.php';
extract($_POST);
$d = new ClasseService();
if ($op != '') {
    if ($op == 'find') {
     
        header('Content-type: application/json');
        echo json_encode($d->findByCode($filiere));
        
    }
}