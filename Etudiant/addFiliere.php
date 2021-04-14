<?php
include_once 'racine.php';
include_once RACINE.'/FiliereService.php';
extract($_GET);

$es = new FiliereService();
$es->create(new Filiere(1, $code, $libelle));

header("location:page Principale.php?p=Filiere");


