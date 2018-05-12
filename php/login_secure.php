<?php
    echo "Username: " . $_POST["username"] . "<br>";
    echo "Password: " . $_POST["password"] . "<br>";

    if(isset($_POST["username"]) && isset($_POST["password"])){
        echo "Variables set <br>";
        $username = $_POST["username"];
        $password = $_POST["password"];

        try {
            $bdd = new PDO("mysql:host=localhost;dbname=bruno;charset=utf8", "root", "Hra8rCJz", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e){
            die("Erreur : " . $e -> getMessage());
        }

        echo "Database connected <br>";

        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password';";

        echo $sql;

        $reply = $bdd -> query($sql);

        /*echo "Reply: " . $reply . "<br>";*/

        /*if($reply < 0){
            echo "Nom d'utilisateur ou mot de passe éronné";
        } else {
            echo "Bienvenue " . $username;
        }*/
    }

?>