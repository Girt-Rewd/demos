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
		// à recopier ici le code de l'étape 2 ...
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
	<h2>Étape 1 : couleur et animal </h2>
	<form action="demo5E04_etape2.php" method="post">
		<label for="ma_couleur">Couleur hexadécimale préférée :</label>
		<input type="text" id="ma_couleur" name="ma_couleur" value="#" />
		<label for="mon_animal">Animal préféré : </label>
		Oiseau
		<input type="radio" id="mon_animal" name="mon_animal" checked="checked" value="oiseau" />
		Poisson
		<input type="radio" id="mon_animal" name="mon_animal"  value="poisson" />
		<input type="submit" value="Étape suivante" />
	</form>
	<h3><a href="index.php">Maison</a></h3>
</body>
</html>