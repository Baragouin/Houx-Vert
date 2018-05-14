<?php

session_start();

if(isset($_SESSION["login"]) && $_SESSION["login"] == true){
    echo "Bienvenue dans l'espace admin, " . $_SESSION["username"];
} else {
    echo "Please log in first to see this page.";
}

?>