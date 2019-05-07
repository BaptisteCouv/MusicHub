<?php
session_start();
// connexion à la base de données MusicHub
include('../layout/bdd.php');

// récupération de toutes les infos du profil
include('../layout/recuperationDonneesProfil.php')


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
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<header>
  <?php @include '../partials/header.php'; ?>
</header>

<body>

  <section class='sectionProfil'>
    <form enctype="multipart/form-data" action="../layout/traitementUploadVideo.php" method="POST">
      <div>
        <div class="">
          <h2>Uploader une video!</h2>
          <?php if (isset($_GET['error'])) {
            echo '<span class="text-danger">Mauvais format fichier, importé un fichier MP4 ou MOV. </span>';
          }?>
            <label class="" for="nameVideo">Titre de votre vidéo</label>
            <input name="nameVideo" type="text" class="" id="nameVideo" required>
          </div>
        </div>
        <div>
          <label for="inlineFormCustomSelect">Choisissez un style</label>
          <select name="styleVideo" class="" id="inlineFormCustomSelect" required>
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
        </div>
        <div class="">
          <label class="" for="uploadVideo">Uploader une vidéo</label>
          <input name="uploadVideo" type="file" class="" id="uploadVideo" required>
        </div>
        </div>
        <div class="">
          <button type="submit" class="btn btn-upload">Submit</button>
        </div>
        </div>
      </form>
    </section>

  </body>
  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </html>