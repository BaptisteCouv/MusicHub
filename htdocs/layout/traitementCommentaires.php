<?php
include ('bdd.php');
session_start();

$comment = htmlspecialchars($_POST['comments']);
$idVideo = $_POST['idVideo'];
$videoPath = $_POST['videoPath'];

//on insère le commentaire dans la table commentaires

$addComment = $bdd->prepare("INSERT INTO comments (idVideo, idUser, comment, commentDate) 
                                VALUES(?,?,?,CURRENT_TIMESTAMP)");
$addComment->execute(array($idVideo, $_SESSION['id'], $comment));


//on ajoute 1 au nombre de commentaires de la video
$rep = $bdd->prepare('UPDATE videos SET nbComments = nbComments + 1 WHERE id = ?');
$rep->execute(array($idVideo));

header("Location: ../pages/video.php?link=$videoPath");
