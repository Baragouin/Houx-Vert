<html>
<head>
    <title>le Houx-Vert - Gîte écolo</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css?<?php echo time(); ?>">
</head>
<body>
    <div id="main_wrapper">
        <div id="login-container">
            <form id="login" action="login.php" method="post">
                <div class="title">
                    Identification requise
                </div>

                <div class="form-group">
                    <label for="username">Nom d'utilisateur:</label>
                    <input type="text" id="username" name="username" class="form-input" placeholder="Entrer un nom d'utilisateur ..." />
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" name="password" class="form-input" placeholder="Entrer un mot de passe ..."/>
                </div>

                <?php

                if(isset($_POST["username"]) && isset($_POST["password"])){
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    $connection = mysqli_connect("localhost", "root", "Hra8rCJz", "bruno");

                    if(mysqli_connect_errno()){
                        echo "Error: Failed to make a MySQL connection, here is why: \n";
                        echo "Errno: " . $connection -> connect_errno . "\n";
                        echo "Error: " . $connection -> connect_error . "\n";

                        exit;
                    }

                    $sql = "SELECT * FROM admin WHERE username=\"" . $username . "\" AND password=\"" . $password . "\";";

                    if(!$result = $connection -> query($sql)){
                        echo "Error: Our query failed to execute and here is why: \n";
                        echo "Query: " . $sql . "\n";
                        echo "Errno: " . $mysqli->errno . "\n";
                        echo "Error: " . $mysqli->error . "\n";
                        exit;
                    }

                    if($result -> num_rows < 1){
                        echo "<p id=\"wrong_password\">Nom d'utilisateur ou mot de passe incorrect</p>";
                    } else {
                        login($username);
                    }

                    mysqli_close($result);
                }

                ?>

                <div class="form-group">
                    <input type="submit" value="Connection >>" class="form-button"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php

function login($username){
    session_start();
    $_SESSION["login"] = true;
    $_SESSION["pseudo"] = $username;

    header("Location: https://baragouin.fr/php/admin.php");
}

?>