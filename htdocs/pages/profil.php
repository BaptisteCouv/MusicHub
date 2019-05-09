<?php
session_start();
// connexion à la base de données MusicHub
include('../layout/bdd.php');

// récupération de toutes les infos du profil
include('../layout/recuperationDonneesProfil.php');

include('../layout/affichageVideoProfil.php');


?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Music Hub</title>
  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="icon" type="/image/png" href="../assets/img/icon.png" />
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<header>
  <?php @include '../partials/header.php'; ?>
  <div id="testdelamort"></div>
</header>

<body>

  <section id="sectionChoix">
    <div class="container">
      <div class="row justify-content-center">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active color-text" data-toggle="tab" href="#home"><i class="fas fa-angle-double-up"></i> Upload Score</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-text" data-toggle="tab" href="#menu1"><i class="fas fa-bars"></i> Playlist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-text" data-toggle="tab" href="#menu2"><i class="fas fa-play"></i> Vidéos</a>
          </li>
        </ul>

      </div>
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane container active" id="home">
          <div class="row justify-content-center">
            <div class="color-card">
              <div class="text-card">
                <div class="text-point">
                  <p>Nombre de point d'Upload</p>
                </div>
                <div class="nb-point"><?php echo $userUploadPoints ?></div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane container fade" id="menu1">...</div>
        <div class="tab-pane container fade" id="menu2">
          <div class="container-fluid" id="grid">
            <div class="row justify-content-center">
              <?php foreach ($videos as $video) {
                echo '<div class="grid col-3">
                                <a href="video.php?link=' . $video["videoPath"] . '">
                                <video id="our-not-video" width="100%" height="150px">
                                    <source src="' . $video["videoPath"] . '" type="video/mp4">
                                </video>
                                </a>
                            <div id="text-grid">' . $video["videoName"] . '</div>
                          </div>';
              };

              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <a class="ref-buton" href="#form">Upload ton clip vidéo<br><i class="fas fa-angle-down fa-2x"></i></a>
      </div>
      <div>
  </section>

  <div id="img-none"></div>

  <section id="form">
    <h1>Upload une vidéo et partage la !</h1>
    <div class="row justify-content-center">
      <form enctype="multipart/form-data" action="../layout/traitementUploadVideo.php" method="POST" class="color-card col-3 offset-4">
        <?php if (isset($_GET['error'])) echo '<span class="text-danger">Mauvais format fichier, importé un fichier MP4 ou MOV. </span>';?>
        <div class="form-group">
          <h2><label for="nameVideo">Titre de votre vidéo</label></h2>
          <input type="text" name="nameVideo" class="form-control padding-pro" id="nameVideo" placeholder="Entrer un titre...">
        </div>
        <h2><label for="inlineFormCustomSelect">Choisissez un style</label></h2>
        <select class="form-control  padding-pro" name="styleVideo" id="inlineFormCustomSelect" required>
          <option selected>Style...</option>
          <option value="Rock">Rock</option>
          <option value="Pop">Pop</option>
          <option value="Electronic">Electronic</option>
          <option value="Rap">Rap</option>
          <option value="Reggae">Reggae</option>
          <option value="Classique">Classique</option>
          <option value="Variété française">Variété française</option>
          <option value="Autres">Autres</option>
        </select>
        <div class="custom-file">
          <input type="file" name="uploadVideo" class="custom-file-input  padding-pro" id="customFileLangHTML">
          <label class="custom-file-label  padding-pro" for="uploadVideo" data-browse="Upload">Sélectionne une vidéo</label>
        </div>
        <button type="submit" class="btn padding-pro">Upload</button>
      </form>
      <div class="row-up col-1 offset-3"><a href="#testdelamort" class="row-up"><i class="fas fa-angle-up fa-7x"></i></a></div>
    </div>
  </section>
  <style>
    body{scroll-behavior: smooth;
         overflow-y: hidden;
         overflow-x: hidden;};
  </style>
</body>
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>