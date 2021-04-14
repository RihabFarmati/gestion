<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'racine.php';
    include_once RACINE . '/EtudiantService.php';
    loadAll();
}

function loadAll() {
    $es = new EtudiantService();
    header('Content-type: application/json');
    echo json_encode(array("etudiants" => $es->getAll()));
}
