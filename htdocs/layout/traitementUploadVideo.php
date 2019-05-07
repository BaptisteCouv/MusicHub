<?php
session_start();
include ('bdd.php');


$idUser=$_SESSION['id'];

// Récupérer les données du formulaire
$videoTitle = htmlspecialchars($_POST['nameVideo']);
$styleVideo = $_POST['styleVideo'];


//on prépare une requete qui enregistre le chemin de l'image dans la bdd
$req=$bdd->prepare('INSERT INTO videos (videoName, videoPath, idUser, musicStyle, uploadDate)
                    VALUES (?,?,?,?,CURRENT_TIMESTAMP)');



if ($_FILES["uploadVideo"]["type"] != "video/mov" && $_FILES["uploadVideo"]["type"] != "video/mp4" ){
    header('Location: ../pages/profil.php?error=fileError'); 

}else {

  //envoi la vidéo importé par l'user vers notre dossier videos

  $uploads_dir= '../assets/videos';
  $name = $idUser.$_FILES['uploadVideo']['name'];
  $tmp_name = $_FILES['uploadVideo']['tmp_name'];
  move_uploaded_file($tmp_name, "$uploads_dir/$name");

  //on déclare une variable qui contient le nouveau chemin de la video
  $videoPath = "$uploads_dir/$name";


  //on execute requete qui enregistre le chemin de l'image dans la bdd
  $req->execute(array(
      $videoTitle,
      $videoPath,
      $idUser,
      $styleVideo
              ));

header('Location: ../pages/profil.php');

};
