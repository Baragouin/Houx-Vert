<?php
    echo "Username: " . $_POST["username"] . "<br>";
    echo "Password: " . $_POST["password"] . "<br>";

    if(isset($_POST["username"]) && isset($_POST["password"])){
        echo "Variables set <br>";
        $username = $_POST["username"];
        $password = $_POST["password"];

        $connection = mysqli_connect("localhost", "root", "Hra8rCJz", "bruno");

        if(mysqli_connect_errno()){
            echo "Error: Failed to make a MySQL connection, here is why: \n";
            echo "Errno: " . $connection -> connect_errno . "\n";
            echo "Error: " . $connection -> connect_error . "\n";

            exit;
        }

        echo "Database connected <br>";

        $sql = "SELECT * FROM admin WHERE username=\"" . $username . "\" AND password=\"" . $password . "\";";

        if(!$result = $connection -> query($sql)){
            echo "Error: Our query failed to execute and here is why: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }

        if($result -> num_rows < 1){
            echo "Nom d'utilisateur ou mot de passe incorrect";
        } else {
            echo "Bienvenue " . $username;
        }

        mysqli_close($result);
    }

?>