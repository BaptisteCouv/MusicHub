<?php
include ('bdd.php');


//on récupère toutes les données de la video qui a le plus de commentaire
$reponse = $bdd->query("SELECT * FROM videos ORDER BY uploadDate DESC");
$videos = $reponse->fetchAll();

