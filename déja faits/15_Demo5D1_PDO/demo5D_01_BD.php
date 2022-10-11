<!DOCTYPE html>
<!-- ++++++++++++++++++ À COMPLÉTER ++++++++++++++++++++++-->
<html lang="fr">

<head>
	<title>Démo5D_01</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="styleTable.css" />
</head>

<body>
	<!-- ============================= Access BD =========================== -->
	<h1>Accès direct à la BD (avec PDO::query)</h1>
	<?php
	// try catch pour attraper les erreurs de connexion ...
	try {
		//code...
		// Connexion et configuration pour les caracrtères UTF-8
		$connexion = new PDO('mysql:host=localhost;dbname=commerce', "root", "oracle");
		//Definir UTF-8 comme jeu de caractères
		$connexion->exec("SET character_set_results='utf8'");
		// Étape 1 : Exécuter la requête SELECT avec query (... tous les produit)
		$resultats =  $connexion->query("SELECT * FROM produit");

		// Étape 2 : Vérifier si le résultat est vide
		if ($resultats->rowCount() == 0) {
			//echo "Pas trouvé";
			echo "Pas trouvé";
		} else {
			// Étape 3 : Utiliser les résultats
			//echo "Description: ".", prix:"."\$<br />";
			echo "<h1>Affichage Description,Prix et Photo du produit </h1>";
			foreach ($resultats as $enr) {
				echo " Description : " . $enr['description'];
				echo ",     Prix    : " . $enr['prix'] . "\$";
				echo ", Photo :    " . '<img src="images/' . $enr['url_photo'] . '">' . "<br/><br/><br/>";
			}
		}





		// echo "Erreur : ".$e->getMessage()."<br />";
	} catch (PDOException $e) {
		//throw $th;
		echo "Erreur : " . $e->getMessage() . "<br/>";
	}

	// fin du catch
	$connexion = null;
	/**/ 
	?>
</body>

</html>