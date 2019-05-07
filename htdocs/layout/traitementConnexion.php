<?php 
// connexion à la base de données MusicHub
include ('../layout/bdd.php');



$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = htmlspecialchars($_POST['userPassword']);


//on séléctionne les infos de l'user s'il existe dans la bdd
$req = $bdd->prepare("SELECT * FROM users WHERE userName = ?");

$req->execute(array(
    $pseudo
));

$compteExiste = $req->fetch();


$isPasswordCorrect = password_verify($mdp, $compteExiste['userPassword']);


if (!$compteExiste) {
    header('Location: ../pages/connexion.php?error2=invalidInput');
} else {
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $compteExiste['id'];
        $_SESSION['pseudo'] = $compteExiste['userName'];
        $_SESSION['email'] = $compteExiste['userEmail'];
        header('Location: ../pages/main.php');
    } else {
        header('Location: ../pages/connexion.php?error3=invalidInput');
    }
}
