<?php
	// on récupère la session, ou on en crée un nouvelle
	session_start();
	// Si l'ulisateurConnecte n'exsite pas, alors on redirige vers la page de connexion

    // On récupère le nom pour l'affichage
	$nomUtilisateur = "";
	
?>


<!DOCTYPE html>
<html lang="fr">
<head>
<title>Démos 5E</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/styleFormulaire.css" />
<link rel="stylesheet" type="text/css" href="css/styleLiens.css" />
</head>
<body >
	<h1>Bienvenu <?php  echo $nomUtilisateur;?> </h1>
	<h3><a href="demo5E03_deconnexion.php">Déconnexion</a></h3>

</body>
</html>