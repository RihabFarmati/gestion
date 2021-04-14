<?php

include_once 'racine.php';
include_once RACINE.'/ClasseService.php';
extract($_GET);

$es = new ClasseService();
$es->delete($es->findById($id));

header("location:page Principale.php?p=classe");
