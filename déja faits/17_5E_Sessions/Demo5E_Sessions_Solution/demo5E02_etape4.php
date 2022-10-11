<?php
	// on crée ou récupère une session
	session_start();

	// on vérifie que la session est active grace à la variable etapeCV
	// si ce n'est pas le cas, on retourne à l'étape 1
	if (!ISSET($_SESSION['etapeCV'])){
		header("Location: demo5E02_etape1.php");
	}
	// si les paramètres essentiels nom et prénom n'ont pas été initialisés, 
	//on retoune à l'étape 1 
	if (!ISSET($_SESSION['nom']) OR !ISSET($_SESSION['prenom'])) {
		header("Location: demo5E02_etape1.php");
	}

	// si le paramètre essentiel profession n'ont pas été initialisés, 
	//on retoune à l'étape 2 
	if (!ISSET($_SESSION['profession'])) {
		header("Location: demo5E02_etape2.php");
	}

	// on enregistre le numéro de l'étape dans la variable etapeCV
	$_SESSION['etapeCV']=4;	

	// On récupère les variables de session, 
	//pour les utiliser dans le HTML final
	$prenom = $_SESSION['prenom'];
	$nom=$_SESSION['nom'];
	$profession = $_SESSION['profession'];
	//creation d'un tableau qui va contenir les années d'expérience
	$tab_annees = array();
	//creation d'un tableau qui va contenir les compagnies qu'on a travaillé
	$tab_cie = array();
	// Si  le paramètre essentiel années  a été initialisée
	if (ISSET($_SESSION['annees'])) {
		// on ajoute les valeurs venant de la variable session année dans le tableau
		$tab_annees=$_SESSION['annees'];
	}
		// Si  le paramètre essentiel compagnies  a été initialisée
	if (ISSET($_SESSION['compagnies'])) {
	// on ajoute les valeurs venant de la variable session année dans le tableau
		$tab_cie=$_SESSION['compagnies'];
	}

	// Pour affichage plus tard
	$numero_session = session_id();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Démos 5E</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/styleLiens.css" />
    <style rel="stylesheet" type="text/css">
    h2,
    h1 {
        text-align: center;
    }
    </style>
</head>

<body>
    <?php
		echo "<h2>************** Curriculum Vitae **************</h2>";
		echo "<h1>".$prenom." ".$nom." : ".$profession."</h1>";
		echo "<h3>Expériences de travail</h3>";
		echo "<ul>";
		for ($i = 0; $i < count($tab_cie); $i++) {
			//affichage venant des tableaux années et compagnies
			echo"<li>".$tab_annees[$i]."-".$tab_cie[$i]."</li>";
		}
		echo "</ul>";
		session_destroy();
	?>
    <h3><a href="index.php">Maison</a></h3>
    <h3><a href="demo5E02_etape1.php">Étape 1</a></h3>
    <p>session id : <?php echo $numero_session;?></p>
</body>

</html>