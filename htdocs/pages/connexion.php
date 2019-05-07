<?php
// connexion à la base de données MusicHub
include ('../layout/bdd.php')

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Music Hub/Connexion</title>
  <!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="assets/img/icon.png" />
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="test">

  <?php @include '../partials/header.php' ?>


  <div class="container">
    <section id="menu">
      <nav>
        <ul class="connexionList">
          <li id="log" class="active"><a href="#">Connexion</a></li>
          <li id="sign"><a href="#">Inscription</a></li>
        </ul>
      </nav>
      <?php 
                if (isset($_GET['error']))
                {
                  echo '<span class="text-danger">Pseudo déjà existant</span>';
                } else if (isset($_GET['error2']))
                {
                  echo '<span class="text-danger">Erreur dans le pseudo</span>';

                } else if (isset($_GET['error3']))
                {
                  echo '<span class="text-danger">Erreur dans le mot de passe</span>';  
                }
                  ;
                ?>

    </section>
    <div class="wrap">
      <section id="login" class="box active">
        <form action="../layout/traitementConnexion.php" method="POST">
          <div id="pseudoInput" class="inputBox">
            <label for="pseudo">Pseudo</label>
            <input name ="pseudo" id="pseudo" type="text" required>
          </div>
          <div id="passwordInput" class="inputBox">
            <label for="password">Mot de passe</label>
            <input name ="userPassword" id="userPassword" type="password" required>
          </div>
          <input type="submit" value="Connexion">
        </form>
      </section>

      <section id="signup" class="box">
        <form action="../layout/traitementInscription.php" method="POST">
          <div id="pseudoInput" class="inputBox">
            <label for="pseudo">Pseudo</label>
            <input name ="pseudo" id="pseudo" type="text" required>
          </div>
          <div id="mailInput" class="inputBox">
            <label for="email">Email</label>
            <input name="userMail" id="userEmail" type="email" required>
          </div>
          <div id="passwordInput" class="inputBox">
            <label for="password">Mot de passe</label>
            <input name="userPassword" id="userPassword" type="password" required>
          </div>
          <input type="submit" value="Inscription">
        </form>
      </section>
    </div>
  </div>
</body>

<!-- JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="../assets/js/forms.js"></script>
</html>