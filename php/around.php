<?php
	if(!isset($_COOKIE["lang"])){
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
	<link rel="stylesheet" type="text/css" href="../css/around.css?<?php echo time(); ?>">
	<link rel="icon" type="image/png" href="../favicon.png"/>

	<script src="../js/cookie.js?<?php echo time(); ?>"></script>
</head>
<body>
	<div id="main_wrapper">
		<?php include("../php/header.php");?>

		<div id="page">
			<article>
				<?php
					try {
						$bdd = new PDO("mysql:host=localhost;dbname=bruno;charset=utf8", "root", "Hra8rCJz", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
					} catch (Exception $e){
						die("Erreur : " . $e -> getMessage());
					}

					$reply = $bdd -> query("SELECT * FROM messages WHERE name = '" . $lang . "_around';");

					while($data = $reply -> fetch()){
				?>

				<h1 class="title">
					<?php echo $data["title"];?>
				</h1>

				<p class="content">
					<?php echo $data["content"];?>
				</p>

				<?php
					include("../php/signature.php");

					}
				?>
			</article>

			<aside>
				<img src="../images/sidebar.jpg"/>
			</aside>
		</div>

		<?php include("../php/footer.php");?>
	</div>

    <?php
        include("../php/lang.php");
        include("../php/admin.php");
    ?>
</body>