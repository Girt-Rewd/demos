<!DOCTYPE html>
<html lang="fr">
<head>
<title>Démos 5E</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/styleFormulaire.css" />
<link rel="stylesheet" type="text/css" href="css/styleLiens.css" />
<style>
	img {float:right;}
	<?php
		$image = "./images/defaut.png";
		// Si la couleur est là, on place le background à cette couleur 
		if (ISSET($_COOKIE['couleur'])) {
			echo "body {background-color:".$_COOKIE['couleur']."";
		}
		// Si l'image est là, on remplace l'image par défaut par celle de l'animal choisi 
		if (ISSET($_COOKIE['image'])) {
			$image = "./images/".$_COOKIE['image'].".jpg";
		}
	?>
</style>
</head>
<body >
	<h1>Préférence avec cookies</h1>
	<img alt="" src="<?php echo $image;?>" height="80" />
	<h2>Étape 3 : cookies disponibles</h2>
	<h3><a href="demo5E04_etape1.php">Étape 1</a></h3>
	<h3><a href="index.php">Maison</a></h3>

</body>
</html>