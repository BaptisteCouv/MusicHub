<?php
// connexion à la base de données MusicHub
try
{
    $bdd = new PDO('mysql:host=10.42.0.140;dbname=MusicHub;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
