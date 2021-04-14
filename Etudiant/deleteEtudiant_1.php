<?php

include_once 'racine.php';
include_once RACINE.'/EtudiantService.php';
extract($_GET);

$es = new EtudiantService();
$es->delete($es->findById($id));

header("location:page Principale.php?p=Etudiant");
