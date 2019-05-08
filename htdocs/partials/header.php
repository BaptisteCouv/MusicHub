<!-- <div class="navbar navbar-expand-lg fixed-top navbar-light bg-dark">
    <img src="../assets/img/logo.png" width='150px'>
</div> -->
<nav class="navbar navbar-expand-lg fixed-top color-head">
  <a class="navbar-brand" href="../pages/main.php"><img src="../assets/img/logo.png" height="50px"></a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav" >
      <li class="nav-item active" id="navbarText">
        <a class="nav-link color-text" href="../pages/main.php">Home</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link color-text" href="">Cathégorie</a>
      </li> -->
      <li class="nav-item">
        <!-- si une session est active, on affiche le bouton 'déconnexion', sinon le bouton 'connexion' -->
        
        <?php if(!empty($_SESSION['id'])){
          echo '<a class="nav-link color-text" href="../pages/deconnexion.php"> Deconnexion </a>';
        } else
        echo '<a class="nav-link color-text" href="../pages/connexion.php"> Connexion </a>';
        ?>

      </li>
    </ul>
    <span class="navbar-text color-text-orange">
      <a class="nav-link color-text-orange" href="../pages/profil.php"><?php if(!empty($_SESSION['pseudo'])) echo '<i class="fas fa-user-astronaut"></i> '.$_SESSION['pseudo']; ?></a>
    </span>
    <!-- <span class="nav-link color-text" href="../pages/connexion.php">inutil</span> -->
  </div>
</nav>

