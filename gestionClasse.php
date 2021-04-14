<?php

chdir('..');
include_once 'ClasseService.php';
extract($_POST);

$ds = new ClasseService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Classe(0, $classe, $filiere));
    } elseif ($op == 'update') {
        $ds->update(new Classe($id, $classe, $filiere));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->getAll());
