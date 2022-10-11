<!--
Description : fichier de tests pour la classe produitDAO
Date        : 
Auteur      : 
-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Démo 5D2 #1</title>
    <meta charset="utf-8" />
    <style>
    h1 {
        background-color: black;
        color: white;
    }

    h2 {
        background-color: #CCCCCC;
    }
    </style>
</head>

<body>
    <!---- Inclusions DAO ---->
    <h1>Test pour la classe ProduitDAO</h1>
    <?php
			
			// Importe l'interface DAO et la classe Produit

			include_once("../../modele/produit.class.php");
			include_once('../../modele/DAO/produitDAO.class.php');
		?>

    <!-- Test de la méthode chercher -->
    <h2>Méthode chercher</h2>
    <?php 
			echo "<h3>On chercher l'item avec le code 101 (il existe ...):</h3>";
			$unProduit=null; // remplacer le null, par l'appel de la bonne méthode 
			echo "<ul><li> Produit 101 => ".($unProduit?$unProduit:"n'exsite pas")."</li></ul>";

			echo "<h3>On chercher l'item avec le code 999 (il n'existe pas ...):</h3>";
			$unProduit=null; 
			echo "<ul><li> Produit 999 => ".($unProduit?$unProduit:"n'exsite pas")."</li></ul>";
		?>

    <!-- Test de la méthode chercherTous -->
    <h2>Méthode chercherTous</h2>
    <?php 
			echo "<h3>On chercher tous les produits:</h3>";
			$tabProduits=null; // remplacer le null, par l'appel de la bonne méthode 
			echo "<ul>";


			echo "</ul>";
		?>

    <!-- Test de la méthode chercherAvecFiltre -->
    <h2>Méthode chercherAvecFiltre</h2>
    <?php 
			echo "<h3>On chercher tous les produits ayant tournevis plat dans la description:</h3>";
			$tabProduits=null; // remplacer le null, par l'appel de la bonne méthode 
			echo "<ul>";
			echo "</ul>";
		?>

    <!-- Test de la méthode insérer -->
    <h2>Méthode inserer</h2>
    <?php 
			echo "<h3>On insère 2 fois le produit #555</h3>";
			$unProduit = new Produit(555, 'Banc de scie économique', 'aucune', 456.78, 2);

			$test=null; // remplacer le null, par l'appel de la bonne méthode 
			echo "<ul><li>Insertion #2".($test?"réussie":"échouée")."</li></ul>";

		?>

    <!-- Test de la méthode modifier -->
    <h2>Méthode modifier</h2>
    <?php 
			echo "<h3>On modifie le produit #555</h3>";
			$unProduit->setPrix(999.99);
			$unProduit->setDescription('Banc de scie deluxe');
			// Appeler la bonne méthode pour faire la modification

			// Vérification
			$unProduit=null; // remplacer le null, par l'appel de la bonne méthode pour récuperer le produit 555 
			echo "<ul><li>Produit #555 ".($unProduit?$unProduit:"n'exsite pas")."</li></ul>";
		?>

    <!-- Test de la méthode chercherAvecFiltre -->
    <h2>Méthode supprimer</h2>
    <?php 
			echo "<h3>On suprime le produit #555</h3>";
			// Appeler la bonne méthode pour faire la suppression

			// Vérification
			$unProduit=null; // remplacer le null, par l'appel de la bonne méthode pour récuperer le produit 555 
			echo "<ul><li>Produit #555 ".($unProduit?$unProduit:"n'exsite plus")."</li></ul>";
		?>

    <!-- Tests des 2 méthodes complémentaires -->
    <h2>Méthode exercice 1a : chercherParPrixDesc</h2>
    <?php 
			echo "<p>... à faire en exercices</p>";
			echo "<h3>Tous les tournevis entre 18 et 23 dollars</h3>";

		?>

    <h2>Méthode exercice 1b : AjusterStock</h2>
    <?php 
			echo "<p>... à compléter en exercices</p>";
			echo "<h3>On vérifie l'état actuel de produit 102 :</h3><p>".$unProduit."</p>";
			
			
			echo "<h3>On ajoute 3 items de produit  102 : </h3>";
			
			echo "<h4>Vérification après récupération du produit:</h4>";
			echo "<p>".$unProduit."</p>";

			echo "<h3>On enlève 3 items de produit  102 : </h3>";
			
			echo "<h4>Vérification après récupération du produit:</h4>";
			echo "<p>".$unProduit."</p>";
		?>

</body>

</html>