<?php
include ('bdd.php');

$idUser= $_SESSION['id'];


//on récupère toutes les infos de l'user 
$reponse = $bdd->prepare("SELECT * FROM users WHERE id = ?");
$reponse->execute(array(
    $idUser
  ));
$userProfil = $reponse->fetch();

//on enregistre toutes les infos de l'user dans des variables
$userId = $userProfil['id'];
$userName = $userProfil['userName'];
$userMail = $userProfil['userEmail'];
$userUploadPoints = $userProfil['uploadPoints'];
