<?php
	try {
		$bdd = new PDO("mysql:host=localhost;dbname=bruno;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e){
		die("Erreur : " . $e -> getMessage());
	}

	$reply = $bdd -> query("SELECT * FROM goldenbook ORDER BY date;");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Livre d'or</title>
	<link rel="stylesheet" type="text/css" href="../css/goldenbook.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="../css/message.css?<?php echo time(); ?>">
</head>
<body>
	<header>
		<h1>Gitecolo - Livre d'or</h1>

		<form action="search.php" method="post">
			<input type="text" name="search" placeholder="Chercher un message"/>

			<!--<input type="submit" name="Envoyer"/>-->
		</form>
	</header>

	<?php
		$count = 0;
		$line = 0;

		while($data = $reply -> fetch()){
			$count++;

			if($count == 1){
				?>

				<section class="line">

				<?php
			}
		
			include("message.php");

			if($count == 3){;
				?>

				</section>

				<?php	

				$line++;
				$count = 0;
			}
		}

		$reply -> closeCursor();

		$sql_request = (isset($_POST["sql"])) ? $_POST["sql"] : null;

		if($sql_request != null){
			echo "OK: " . $sql_request;
		} else {
			echo "FAIL";
		}
	?>
</body>
</html>