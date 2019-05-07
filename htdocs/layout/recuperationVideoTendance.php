<?php
include ('bdd.php');


//on récupère toutes les données de la video qui a le plus de commentaire
$reponse = $bdd->query("SELECT id, videoName, videoPath, idUser, MAX(nbComments), musicStyle, uploadDate FROM videos ");
$videoTendance = $reponse->fetch();

//on enregistre toutes les infos de la video tendance dans des variables

$videoId = $videoTendance['id'];
$videoName = $videoTendance['videoName'];
$videoPath = $videoTendance['videoPath'];
$idUserVideo = $videoTendance['idUser'];
$videoStyle = $videoTendance['musicStyle'];
$videoUploadTime= $videoTendance['uploadDate'];

