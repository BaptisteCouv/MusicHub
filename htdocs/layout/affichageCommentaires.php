<?php
include ('bdd.php');

$idVideo= $video['0'];

//on selectionne tous les commentaires de la video et le nom du user qui a commenté
$reponse = $bdd->prepare("SELECT * FROM comments 
                        INNER JOIN videos 
                        ON comments.idVideo = videos.id
                        INNER JOIN users 
                        ON comments.idUser = users.id
                        WHERE comments.idVideo = ?");
$reponse->execute(array(
        $idVideo
    ));
$videoComments = $reponse->fetchAll();

