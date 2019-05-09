<?php
include 'bdd.php';

$linklink = $_GET['link'];

//on récupère toutes les infos de la video qui a son link dans la barre URL
$reponse = $bdd->prepare("SELECT * FROM videos 
                          INNER JOIN users 
                          WHERE videoPath= ? 
                          AND videos.idUser = users.id");
$reponse->execute(array(
    $linklink
  ));
$video = $reponse->fetch();
