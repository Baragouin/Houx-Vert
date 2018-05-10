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

                <div class="form-group">
                    <input type="submit" value="Connection >>" class="form-button"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    echo "Here";
    echo "Username: " . $username;
    echo "Password: " . $password;

    if(isset($_POST["username"]) && isset($_POST["password"])){
        echo "1";
        $username = $_POST["username"];
        $password = $_POST["password"];

        try {
            $bdd = new PDO("mysql:host=localhost;dbname=bruno;charset=utf8", "root", "Hra8rCJz", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e){
            die("Erreur : " . $e -> getMessage());
        }

        $reply = $bdd -> query("SELECT * FROM admin WHERE username = " . $username . " AND password = " . $password);

        if($result < 0){
            echo "Nom d'utilisateur ou mot de passe éronné";
        } else {
            echo "Bienvenue " . $username;
        }
    }

?>