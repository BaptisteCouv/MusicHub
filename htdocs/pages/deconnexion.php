<?php
session_start();
session_destroy();
$_SESSION = array(); // Clears the $_SESSION variable
header('Location: connexion.php');