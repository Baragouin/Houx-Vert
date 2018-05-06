<head>
	<link rel="stylesheet" type="text/css" href="../css/signature.css?<?php echo time(); ?>">
</head>

<div class="arrow"></div>

<p class="signature">
	<?php
		$date = new DateTime($data["date"], new DateTimeZone('Europe/Paris'));

		$author = $data["author"];

		if($lang == "fr"){
			echo $date->format("d/m/Y") . " par " . $author;
		} else if($lang == "en"){
			echo $date->format("d/m/Y") . " by " . $author;
		} else if($lang == "es"){
			echo $date->format("d/m/Y") . " por " . $author;
		}
	?>
</p>