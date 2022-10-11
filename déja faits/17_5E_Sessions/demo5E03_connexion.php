<?php
	define("DOSSIER_RACINE", "Demo5E/");
	include_once("modele/DAO/UtilisateurDAO.class.php");
	
	// on récupère la session ou on en crée une nouvelle
	session_start();
	// Si un formulaire post a été soumis
	if(ISSET($_POST['nom_utilisateur']) AND ISSET($_POST['mot_passe'])) {
		// On récupère l'utilisateur à partir du DAO
		$unUtilisateur=UtilisateurDAO::chercher($_POST['nom_utilisateur']);
		// Si l'utilisateur existe et que le mot de passe est bon
		if ($unUtilisateur != null) {
			if ($unUtilisateur->verifierMotPasse($_POST['mot_passe'])){
				// on créer la variable de session utilisateurConnecte
				$_SESSION['utilisateurConnecte']=$_POST['nom_utilisateur'];
				// On redirige vers la page privee, puisqu'on est maintenant connecté
				header ("Location: demo5E03_pagePrivee.php");
			}
		}
	}
	// Sinon, si la session est active, on redirige aussi vers la page privée
	//puisqu'il s,agit du même utilisateur
	elseif(ISSET($_SESSION['utilisateurConnecte'])){
		header ("Location: demo5E03_pagePrivee.php");
	} 
	// Pour tous les cas non-redirigés, on reste sur la page de connexion
	
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
	<h1>Connexion</h1>
	<form action="" method="post">
		<label for="nom_utilisateur">Nom utilisateur:</label>
		<input type="text" id="nom_utilisateur" name="nom_utilisateur" />
		<label for="mot_passe">Mot de passe :</label>
		<input type="text" id="mot_passe" name="mot_passe" />
		<input type="submit" value="Se connecter" />
	</form>
	<h3><a href="index.php">Maison</a></h3>
</body>
</html>