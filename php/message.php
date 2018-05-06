<article class="box">
	<div class="infos">
		<h3><?php echo "#" . $data["id"];?></h3>
		<h1><?php echo $data["name"] . " " . $data["surname"];?></h1>
		<h2>31/10/18 à 14h12</h2>
	</div>

	<div class="text">
		<p><?php echo $data["text"];?></p>
	</div>

	<form class="result">
		<input value="Accepter" type="button" name="accept" class="accept"/>

		<input value="Répondre" type="button" name="reply" class="reply"/>

		<input value="Supprimer" type="button" name="delete" class="delete" />
	</form>

	<script type="text/javascript" src="../js/goldenbook.js"></script>
</article>