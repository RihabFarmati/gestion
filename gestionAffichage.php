<?php
       include_once 'racine.php';
include_once RACINE.'/classeservice.php';
extract($_POST);

$id_fil=$_GET['id_fil'];
$reponse = $bdd->query("SELECT * FROM classe WHERE id_filiere='$id_fil'");


header('Content-type: application/json');
echo json_encode($reponse);



                          
                
                