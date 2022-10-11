<?php
	// on récupère la session, ou on en crée un nouvelle
	session_start();
	// Si l'ulisateurConnecte n'exsite pas, alors on redirige vers la page de connexion
	if(!ISSET($_SESSION['utilisateurConnecte'])){
		header ("Location: demo5E03_connexion.php");
	} 

    // On récupère le nom pour l'affichage
	$nomUtilisateur = $_SESSION['utilisateurConnecte'];
	
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Démos 5E</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/styleFormulaire.css" />
    <link rel="stylesheet" type="text/css" href="css/styleLiens.css" />
</head>

<body>
    <h1>Bienvenu <?php  echo $nomUtilisateur;?> </h1>
    <!-- Vers la page de deconnexion -->
    <h3><a href="demo5E03_deconnexion.php">Déconnexion</a></h3>

</body>

</html>