<!--
Description : fichier avec formulaitres pour utiliser la classe produitDAO (Exercice 2)
Date        : 6 avril 2020
Auteur      : Dini Ahamada
-->
<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Ajouter un produit</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/styleFormulaire.css" />
	<style>
		h1 {
			background-color: black;
			color: white;
		}

		h2 {
			background-color: #CCCCCC;
		}

		.affichage {
			background-color: #AAFFAA;
		}
	</style>
</head>

<body>


	<!---------------------- Formulaire 1, recherche par prix et description  ------------>

	<h1>Formulaire d'insertion</h1>
	<form action="testInsererProduitDAO.php" method="get">
		<label for="code">Code :</label>
		<input id="code" type="texte" name="code" />

		<label for="description">Partie de la description :</label>
		<input id="description" type="texte" name="description" />
		<label for="marque">Marque :</label>
		<input id="marque" type="texte" name="marque" />
		<label for="prix">Prix :</label>
		<input id="prix" type="texte" name="prix" />
		<label for="quantite">Quantité :</label>
		<input id="quntite" type="texte" name="quantite" />
		<label for="photo">Photo :</label>
		<input id="photo" type="file" name="url_photo" />

		<input type="hidden" name="NumeroFormulaire" value="1" />

		<input type="submit" value="Soumettre" />
	</form>


	</form>



</body>

</html>