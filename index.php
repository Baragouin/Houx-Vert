<?php
    $show = false;
	if(!isset($_COOKIE["lang"])){
	    $show = true;
		setcookie("lang", "fr", time() + 365*24*3600, null, null, false, true);
	}

	$lang = $_COOKIE["lang"];

	if(!isset($lang)){
		$lang = "fr";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>le Houx Vert - Gîte écolo</title>

    <meta charset="utf-8"/>
    <meta name="description" content="Site officiel du gîte le Houx-Vert."/>

	<link rel="stylesheet" type="text/css" href="css/index.css?<?php echo time(); ?>">
	<link rel="icon" type="image/png" href="favicon.png"/>

	<script src="js/cookie.js?<?php echo time(); ?>"></script>

    <?php
        if($show == true){
            ?>

            <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
            <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
            <script>
                window.addEventListener("load", function(){
                    window.cookieconsent.initialise({
                        "palette": {
                            "popup": {
                                "background": "#3ca23a"
                            },
                            "button": {
                                "background": "#ffffff",
                                "text": "#000000"
                            }
                        },
                        "theme": "classic",
                        "content": {
                            "message": "En poursuivant votre navigation sur nos sites, vous acceptez l'installation et l'utilisation de cookies pour améliorer votre expérience.",
                            "dismiss": "Accepter",
                            "link": "En savoir plus",
                            "href": "https://www.baragouin.fr/php/cookies.php"
                        }
                    })});
            </script>

            <?php
        }
    ?>
</head>
<body>
	<div id="main_wrapper">
		<?php include("php/header.php");?>

		<section id="page">
			<article>
				<?php
					try {
						$bdd = new PDO("mysql:host=localhost;dbname=bruno;charset=utf8", "root", "Hra8rCJz", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
					} catch (Exception $e){
						die("Erreur : " . $e -> getMessage());
					}

					$name = $lang . "_home_news";
					$reply = $bdd -> query("SELECT * FROM messages WHERE name = '" . $lang . "_home_news';");

					while($data = $reply -> fetch()){
				?>

				<h1 class="title">
					<?php echo $data["title"];?>
				</h1>

				<p class="content">
					<?php echo $data["content"];?>
				</p>

				<?php
					include("php/signature.php");

					}
				?>
			</article>

			<aside>
				<img src="images/sidebar.jpg"/>
			</aside>
		</section>

		<?php include("php/footer.php");?>
	</div>
	<?php include("php/lang.php");?>
</body>
</html>