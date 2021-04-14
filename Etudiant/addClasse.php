<?php
include_once 'racine.php';
include_once RACINE.'/classeService.php';
extract($_GET);

$es = new ClasseService();
$es->create(new classe(1,$code, $id_filiere));

header("location:page Principale.php?p=classe");

