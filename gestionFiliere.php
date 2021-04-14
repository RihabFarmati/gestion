<?php

chdir('..');
include_once 'FiliereService.php';
extract($_POST);

$ds = new FiliereService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Filiere(0, $code, $libelle));
    } elseif ($op == 'update') {
        $ds->update(new Filiere($id, $code, $libelle));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->getAll());
