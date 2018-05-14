<?php

session_start();

if(isset($_SESSION["login"]) && $_SESSION["login"] == true){
    echo "Bienvenue dans l'espace admin, " . $_SESSION["username"];
} else {
    header("Location: https://baragouin.fr/php/login.php");
}

?>