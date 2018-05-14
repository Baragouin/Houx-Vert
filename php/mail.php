<?php
    /*$name = $_POST["name"];
    $mail = $_POST["mail"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];*/

    // Plusieurs destinataires
    $to  = 'medico.timothe@gmail.com'; // notez la virgule

    // Sujet
    $subject = "Nouveau message depuis le site";

    // message
    $message = "<h2>Ceci est un message de test</h2><br/><br/><p>Veuillez ne pas y répondre</p>";

    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    $headers['MIME-Version'] = '1.0';
    $headers['Content-type'] = 'text/html; charset=iso-8859-1';

    // En-têtes additionnels
    $headers['To'] = 'Timothé Medico <medico.timothe@gmail.com>';
    $headers['From'] = 'le Houx-Vert <contact@gitecolo.fr>';

    // Envoi
    mail($to, $subject, $message, $headers);
?>

<html>
<head>
    <title>le Houx Vert - Gîte écolo</title>
    <link rel="icon" type="image/png" href="../favicon.png"/>
</head>
<body>
    <p>Vous allez être redirigé vers la page principale, <a href="../index.php"> cliquer ici </a> si rien ne se passe</p>
</body>
</html>

<?php
    sleep(5);


    header("Location: https://www.baragouin.fr");
    die();
?>