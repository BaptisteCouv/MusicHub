<?php
session_start();
// connexion à la base de données MusicHub
include('../layout/bdd.php');

//on récupère la video tendance
include '../layout/recuperationVideoTendance.php';

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

<body  id="background-image-main">
    <header>
        <?php @include '../partials/header.php'; ?>
    </header>
    <div class="recherch col-12">
        <div class="recherch-2 col-3">
            <input type="search" id="site-search" name="recherche" aria-label="Search through site content">
        </div>
    </div>
    <section id="main-sections"> 
        <div class="container-fluid">
            <div class="row">
                <div class="user-list col-2">

                </div>
                <div class="user-favorite col-6 offset-1">
                    <video id="our-video" width="900" height="400" controls>
                        <source src="<?php $videoPath ?>" type="video/mp4">
                    </video>
                </div>
                <div class="user-favorite-update col-2 offset-1 ">
                    
                </div>
            </div>
        </div>
        <div class="container-fluid" id="grid">
            <div class="row">
                <div class="grid col-2 offset-3">a
                <?php




                ?>

                </div>
                <div class="grid col-2 ml-4">a</div>
                <div class="grid col-2 ml-4">a</div>
                <div class="grid col-2 ml-4">a</div>
            </div>
            <div class="row">
                <div class="grid col-2 offset-3">a</div>
                <div class="grid col-2 ml-4">a</div>
                <div class="grid col-2 ml-4">a</div>
                <div class="grid col-2 ml-4">a</div>
            </div>
        </div>
        <div class="test"></div>
    </section>
</body>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>