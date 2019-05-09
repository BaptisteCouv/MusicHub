<?php
include 'bdd.php';

$idUser =$_SESSION['id'];

//on récupère toutes les données de la video qui a le plus de commentaire
$reponse = $bdd->prepare("SELECT * FROM videos WHERE idUser = ?");
$reponse->execute(array($idUser));
$videos = $reponse->fetchAll();