<?php require_once("demo.php")?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="La próxima película de Marvel">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
	<title>La próxima película de Marvel</title>
</head>
<body>
	<main>
		<h2 id="main-title">La próxima película de Marvel</h2>
		<section>
			<img src="<?= $data["poster_url"];?>" width="200" alt="Poster de <?= $data["title"];?>">
		</section>
		<hgroup>
			<h3><?= $data["title"]?> se estrena en <?= $data["days_until"];?> días</h3>
			<p>Fecha de estreno: <?= $data["release_date"];?></p>
			<p>La siguiente película es: <?= $data["following_production"]["title"];?></p>
		</hgroup>
	</main>
</body>
</html>

