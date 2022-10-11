<!DOCTYPE html>
<!-- ++++++++++++++++++ À COMPLÉTER ++++++++++++++++++++++-->
<html lang="fr">

<head>
    <title>Démo5D_02</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="styleTable.css" />
</head>

<body>
    <!-- ============================= Access BD =========================== -->
    <h1>Mise à jour de la BD (avec PDO::exec)</h1>
    <?php
		    // Note  : pour simplification de l'exemple, sans try-catch. Il faudrait l'ajouter ...
			
			// Connexion et configuration
			$connexion = new PDO('mysql:host=localhost;dbname=commerce', "root", "root");
			$connexion->exec("SET character_set_results = 'utf8'");	
		?>
    <?php
			// ========= Affichage Avant Modification ========================================================
	        // commande query pour voir le produit avec SELECT sur le produit avec code 101
			echo "<h2> Au début </h2>";
			$resultat = $connexion->query("SELECT code,description,quantite,prix FROM produit WHERE code=101");
			//La méthode fetch permet d'obtenir un enregistrement à la fois dans un tableau associatif.
			$rangee = $resultat->fetch();
			echo "[#".$rangee['code'].", Desc.:".$rangee['description'].", Qté:".$rangee['quantite'].", Prix:".$rangee['prix']."$]<br /><br />";
			
			
			// ========= Modification =========================================================================
	        // commandes exec pour modifier le produit avec UPDATE sur le prix et la quantite pour le produit avec le code 101
			echo "<h2>Nouveau résultat après UPDATE</h2>";
			echo ".... Opération update sur la quantite (+=1) ....<br />";
			echo ".... Opération update sur le prix (+=0.10) ....<br /><br/>";
			//**************************************** A COMPLÉTER ********************************************

             $connexion->exec("update produit set quantite=quantite+1 where code=101");

	         $connexion->exec("update produit set prix=prix+0.1 where code=101");
			// ========= Affichage Après Modification ========================================================
			// commande query pour re-voir le produit avec SELECT sur le produit avec code 101
			$resultat = $connexion->query("SELECT code,description,quantite,prix FROM produit WHERE code=101");
			$rangee = $resultat->fetch();
			echo "[#".$rangee['code'].", Desc.:".$rangee['description'].", Qté:".$rangee['quantite'].", Prix:".$rangee['prix']."$]<br /><br />";

			// ========= Modification (pour replacer les données à l'état original) ===========================
				echo "<h2>OPÉRATION INVERSE </h2>";
			//******************************* À COPIER-COLLER, OPÉRATION INVERSE ******************************
			
			$connexion->exec("update produit set quantite=quantite-1 where code=101");

	         $connexion->exec("update produit set prix=prix-0.1 where code=101");
			
				// ========= Affichage Après Modification ========================================================
			// commande query pour re-voir le produit avec SELECT sur le produit avec code 101
			$resultat = $connexion->query("SELECT code,description,quantite,prix FROM produit WHERE code=101");
			$rangee = $resultat->fetch();
			echo "[#".$rangee['code'].", Desc.:".$rangee['description'].", Qté:".$rangee['quantite'].", Prix:".$rangee['prix']."$]<br /><br />";
			
			
			$connexion=null;
		?>

</body>

</html>