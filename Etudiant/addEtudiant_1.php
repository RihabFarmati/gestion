<?php
include_once 'racine.php';
include_once RACINE.'/EtudiantService.php';
extract($_GET);
$es = new EtudiantService();
$es->create(new Etudiant(1,$cin, $nom, $prenom, $email,$psw,$telephone,$filiere, $classe));

header("location:page Principale.php?p=Etudiant");

