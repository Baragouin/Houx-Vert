<?php
echo "Username: " . $_POST["username"] . "<br>";
echo "Password: " . $_POST["password"] . "<br>";

if(isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        $bdd = new PDO("mysql:host=localhost;dbname=bruno;charset=utf8", "root", "Hra8rCJz", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e){
        die("Erreur : " . $e -> getMessage());
    }

    $reply = $bdd -> query("SELECT * FROM admin WHERE username = " . $username . " AND password = " . $password);

    if($reply < 0){
        echo "Nom d'utilisateur ou mot de passe éronné";
    } else {
        echo "Bienvenue " . $username;
    }
}

?>