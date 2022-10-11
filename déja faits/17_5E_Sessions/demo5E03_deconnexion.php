<?php
	// On démarre la session, ou on la récupère
	session_start();
    // nom par défaut
	$nomUtilisateur = "";

	// Si l'utilisateur n'était pas connecté, on le redirige versla page de connexion
	if(!ISSET($_SESSION['utilisateurConnecte'])){
		header ("Location: demo5E03_connexion.php");
	} 
	
	// Sinon, on récupère le nom d'utilisateur et on supprime le variable de 
	// session qui indique que l'utilisateur est connecté
	$nomUtilisateur = $_SESSION['utilisateurConnecte'];
	// suppression la variable de session
	unset($_SESSION['utilisateurConnecte']);


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
	<h1> <?php  echo $nomUtilisateur;?> : Vous êtes maintenant déconnecté</h1>
	<h3><a href="demo5E03_connexion.php">Se connecter</a></h3>
</body>
</html>