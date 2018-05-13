<?php
    echo "Username: " . $_POST["username"] . "<br>";
    echo "Password: " . $_POST["password"] . "<br>";

    if(isset($_POST["username"]) && isset($_POST["password"])){
        echo "Variables set <br>";
        $username = $_POST["username"];
        $password = $_POST["password"];

        $connection = mysqli_connect("localhost", "root", "Hra8rCJz", "bruno");

        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        echo "Database connected <br>";

        $sql = mysqli_query("SELECT FROM users (id,username, password) WHERE username=$fusername");

        if(mysqli_num_rows($sql)>=1){
            echo "Bienvenue " . $username;
        } else {
            echo "Erreur, nom d'utilisateur ou mot de passe incorect";
        }
    }

?>