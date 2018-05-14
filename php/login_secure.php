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

        $result = mysqli_query("SELECT * FROM admin;");

        echo "<table>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr> <td>Id=$row[0]</td> <td>Pseudo=$row[1]</td> <td>Password=$row[2]</td> </tr>";
        }

        echo "</table>";

        mysqli_close($result);
    }

?>