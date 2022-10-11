<?php
	// Créez les cookies, si on arrive par le formulaire de l'étape 1 (data ma_couleur et mon_animal)
	if (ISSET($_POST["ma_couleur"]) AND ISSET($_POST["mon_animal"])) {
		setcookie("couleur",$_POST["ma_couleur"] , time() + (60 * 10));  // Druée : le temps courant + 10 minutes
		setcookie("image",$_POST["mon_animal"] , time() + (60 * 10));
    }	
?>


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
	<?php
	echo "<p>".var_dump($_COOKIE['couleur'])."</p>";
	?>
	<h1>Préférence avec cookies</h1>
	<img alt="" src="<?php echo $image;?>" height="80" />
	<h2>Étape 2 : création des cookies</h2>
	<h3><a href="demo5E04_etape3.php">Étape 3</a></h3>
	<h3><a href="index.php">Maison</a></h3>

</body>
</html>