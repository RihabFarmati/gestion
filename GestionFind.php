<?php

//chdir('..');
include_once 'FiliereService.php';
extract($_POST);
$r = true;
$ds = new FiliereService();
if ($op != '') {
    if ($op == 'find') {
        $d = new ClasseService();
        eader('Content-type: application/json');
        echo json_encode($d->findById($id));
        $r = FALSE;
    }
}

if ($r == true){
header('Content-type: application/json');
echo json_encode($ds->getAll());
}