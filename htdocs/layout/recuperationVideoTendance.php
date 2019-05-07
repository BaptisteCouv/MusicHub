<?php
include ('bdd.php');


//on récupère toutes les données de la video qui a le plus de commentaire
$reponse = $bdd->query("SELECT * FROM videos ORDER BY nbComments DESC");
$videoTendance = $reponse->fetch();

//on enregistre toutes les infos de la video tendance dans des variables

$videoTendanceId = $videoTendance['id'];
$videoTendanceName = $videoTendance['videoName'];
$videoTendancePath = $videoTendance['videoPath'];
$idUserVideoTendance = $videoTendance['idUser'];
$nbCommentsVideoTendance = $videoTendance['nbComments'];
$videoTendanceStyle = $videoTendance ['musicStyle'];
$videoTendanceUploadDate = $videoTendance['uploadDate'];
