<html>
<head>
    <title>le Houx-Vert - Gîte écolo</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css?<?php echo time(); ?>">
</head>
<body>
    <div id="main_wrapper">
        <div id="login-container">
            <form id="login" action="login_secure.php" method="post">
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