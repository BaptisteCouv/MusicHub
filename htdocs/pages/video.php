<?php
session_start();
// connexion à la base de données MusicHub
include('../layout/bdd.php');

include('../layout/affichageVideo.php');
include('../layout/affichageCommentaires.php'); 
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

<body id="background-image-main">
    <header>
        <?php @include '../partials/header.php'; ?>
    </header>
    <div class="recherch col-12">
        <div class="recherch-2 col-3">
            <!-- <input type="search" id="site-search" name="recherche" aria-label="Search through site content" placeholder="Rechercher"> -->
        </div>
    </div>
    <section id="main-sections">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="user-favorite">
                    <video id="our-video" width="100%" height="100%" controls>
                        <source src="<?php echo $_GET['link'] ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="grid">
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <h4 class="textWhite"><?php echo $video['videoName'] ?></h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <p>De : <span class="nameUploader"><?php echo $video['userName'] ?></span></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <p>Uploader le : <span class="nameUploader"><?php echo $video['uploadDate'] ?></span></p>
                </div>
            </div>
            <hr class="cut-container">
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <h5 class="textWhite">Commentaires</h5>
                </div>
            </div>
            <?php
            //boucle affichage commentaires
            foreach ($videoComments as $videoComment) {
                echo '<div class=" row justify-content-center">
                <div class= "col-md-auto">
                    <hr><em>'.$videoComment["commentDate"].' </em><span class="nameUploader"><strong>'.$videoComment["userName"].'</strong></span><span class="textWhite">'."   ".$videoComment["comment"].'</span><br>
                </div>
                </div>';
            }
            ?>
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <form action="../layout/traitementCommentaires.php" method="post">
                        <input type="text" name="comments" placeholder="Tape ton commentaire ici" required>
                        <input type="hidden" name="idVideo" value="<?php echo $video['0' ]?>">
                        <input type="hidden" name="videoPath" value="<?php echo $video['videoPath' ]?>">
                        <button class="btn padding-pro" type="submit" >Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>