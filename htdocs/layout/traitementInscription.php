<?php 
// connexion à la base de données MusicHub
include ('../layout/bdd.php');



$pseudo =htmlspecialchars($_POST['pseudo']);
$mail =htmlspecialchars($_POST['userMail']);
$mdp = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);

// Creation du compte
$crerateUser = $bdd->prepare("INSERT INTO users(userName, userPassword, userEmail) 
                                VALUES(?,?,?)");


// Vérification pseudo non pris 
$reponse = $bdd->prepare("SELECT * FROM users WHERE userName = ?");

$reponse->execute(array(
    $pseudo
));

$isUserAvailables = $reponse->fetch();

if ($isUserAvailables) {
    header('Location: ../pages/connexion.php?error=invalidInput');
} else {
    $crerateUser->execute(array($pseudo, $mdp, $mail));
    session_start();
    $_SESSION['pseudo']=$pseudo;
    header('Location: ../pages/main.php');

}


