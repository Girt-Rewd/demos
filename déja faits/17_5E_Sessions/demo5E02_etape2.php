<?php
	// on crée ou récupère une session
	session_start();

	// si on arrive du formulaire de l'étape 1
	// on récupère ses données et on les places dans les variables de session
	if (ISSET($_GET['nom']) AND ISSET($_GET['prenom']) && !empty($_GET['nom']) && !empty($_GET['prenom'])) {
		//le tableau associatif $_SESSION contient les noms de variables (clés) 
		//et leur valeur associée (valeurs).
         //Les variables de session sont définies avec la variable globale PHP : $_SESSION   
		//On utilise une nouvelle variable de session qui a pour valeur 2
		$_SESSION['etapeCV']=2;
		// on recupère le nom du formulaire et  on l'associe la session du nom
		$_SESSION['nom']=$_GET['nom'];
		$_SESSION['prenom']=$_GET['prenom'];
	
	// si on arrive d'une autre étape et que les données sont initialisées
	// on ajuste le numero d'étape
	} elseif (ISSET($_SESSION['nom']) AND ISSET($_SESSION['prenom'])) {
	// on garde l'étape 2
	$_SESSION['etapeCV']=2;
	// si les données n'ont jamais été initialisées, on retourne à l'étape 1
	} else {
	//on redige vers l'étape 1 pour remplir le formulaire
	header("Location: demo5E02_etape1.php");
	}
	// Pour affichage plus tard
	$numero_session = session_id();

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
	<h1>Site de création de CV </h1>
	<h2>Étape 2 : profession </h2>
	<form action="demo5E02_etape3.php" method="get">
		<label for="profession">Profession :</label>
		<input type="text" id="profession" name="profession" />
		<input type="submit" value="Étape suivante" />
	</form>
	<h3><a href="index.php">Maison</a></h3>
	<p>session id : <?php echo $numero_session;?></p>

</body>
</html>