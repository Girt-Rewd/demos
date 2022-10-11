<?php
	// on crée ou récupère une session
	session_start();

	// on vérifie que la session est active grace à la variable etapeCV
	// si ce n'est pas le cas, on retourne à l'étape 1
	if (!ISSET($_SESSION['etapeCV'])){
		header("Location: demo5E02_etape1.php");
	}

	// Si le formulaire provient de l'étape 2, on initialise la profession
	if ($_SESSION['etapeCV']==2) {
		// on recupere la valeur du champ profession et
		// on l'associe la session de la profession
		$_SESSION['profession']=$_GET['profession'];
	}

	// Si le formulaire provient de l'étape 3, on ajoute une autre expérience de travail
	if ($_SESSION['etapeCV']==3) {
		if (!ISSET($_SESSION['annees'])) {
			// on vide l'année, en l'affectant à tableau vide
			$_SESSION['annees']=[];
		}
		if (!ISSET($_SESSION['compagnies'])) {
			$_SESSION['compagnies']=[];
		}
		//on ajoute une autre expérience de travail
		array_push($_SESSION['annees'],$_GET['annees']);
		array_push($_SESSION['compagnies'],$_GET['compagnie']);	
	}
	// on enregistre le numéro de l'étape dans la variable etapeCV
	$_SESSION['etapeCV']=3;	
	
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

<body>
    <h1>Site de création de CV </h1>
    <h2>Étape 3 : expériences de travail </h2>
    <h4>Ajouter</h4>
    <form action="demo5E02_etape3.php" method="get">
        <label for="annees">Années de début (début-fin):</label>
        <input type="text" id="annees" name="annees" />
        <label for="compagnie">Compagnie :</label>
        <input type="text" id="compagnie" name="compagnie" />
        <input type="submit" value="Ajouter" />
    </form>
    <h4>Compléter</h4>
    <!-- On redige vers l'étape 4 -->
    <form action="demo5E02_etape4.php" method="get">
        <input type="submit" value="Compléter" />
    </form>
    <h3><a href="index.php">Maison</a></h3>
    <p>session id : <?php echo $numero_session;?></p>

</body>

</html>