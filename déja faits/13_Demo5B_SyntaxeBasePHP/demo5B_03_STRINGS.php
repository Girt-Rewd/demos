<!DOCTYPE html>
<!-- 
	Fichier     : Démo 5B 03, les String
	Description : fichier qui applique les fonctions sur les chaines reçues par la requête HTML
    Auteur      : Dini Ahamada
	Date        : 2021-11-07
-->
<html lang="fr">

<head>
	<title>démo5B_03</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="styleTable.css" />
</head>

<body>

	<!-- ============================= Analyse de Strings =========================== -->
	<h1>Analyse de chaines de caractères</h1>

	<?php
	// Détecter si la chaine n'a pas été soumise et afficher une erreur
	$chaine = $_GET["chaine"] ;
	
	if (isset($chaine) && $chaine != null) {

		// Si la chaine a pas été soumise
		// Obtenir la chaine et la sousChaine à partir du GET
		$sousChaine = $_GET["sousChaine"];
		// Nombre de caractère et 
		//strlen ($ch) renvoie le nombre de caractère dans une chaine.
		echo "<p>La chaine : " . $chaine .  " (" . strlen($chaine) . " caractère(s), ";
		//str_word_count(<chaine de caractère>) compte le nombre de motn d’une chaine
		echo str_word_count($chaine) .  " mot(s))" . "</p>";

		// Affichez que la sousChaine n'apparait pas dans la chaine
		//strpos(<chaine>,<sous chaine>) tru 
		if (strpos($chaine, $sousChaine) == false) {
			echo "<p>Sous-chaine non trouvée</p>";
		} else {
			// ou rempalcez la sousChaine par des ---- et affichez l'index où la sousChaine a été trouvée
			echo "<p>La 1<sup>e</sup> position de la sous-chaine est : " . strpos($chaine, $sousChaine) .     "</p>";
			echo "<p>Version censurée : "    . str_replace($sousChaine, "----", $chaine) .   "</p>";
		}
	} else {
		echo "Pas de paramètre reçu";
	}

	?>

	<!-- ============================= Tableaux index =========================== -->
	<h1>Tableaux Indexés</h1>
	<h2>Liste des étudiants</h2>

	<!------------- Récupérez la chaineEtudiants et en faire des tableaux ------------>
	<!-------------- format : Nom0:DA0:Note0;Nom1:DA1:Note1; ... -->
	<?php
	$etudiants = [];
	$numeroDA = [];
	$notes = [];

	$nombreEtudiants = count($etudiants);
	$somme = 0.0;
	foreach ($notes as $note) {
		$somme += $note;
	}
	?>

	<!------------- Affichez les résultats dans une table ------------>
	<table>
		<thead>
			<tr>
				<th>Étudiants</th>
				<th>Numéro DA</th>
				<th>Notes</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$somme = 0;
			$ch_etudiants = $_GET["chaineEtudiant"];
			//$tab = explode ("séparateur", $ch) transfrome un echaine en tableau
			$tab_etudiants = explode(";", $ch_etudiants);
			$nombreEtudiants = count($tab_etudiants);
			for ($i = 0; $i < $nombreEtudiants; $i++) {
				$infoUnEtudiant = explode(":", $tab_etudiants[$i]);
				echo "<tr>";
				echo "<th>", $infoUnEtudiant[0], "</th>";
				echo "<td>", $infoUnEtudiant[1],"</td>";
				echo "<td>", $infoUnEtudiant[2],"</td>";
				echo "</tr>";
				$somme = $somme + $infoUnEtudiant[2];
			}
			?>
		</tbody>

	</table>
	<p> Nombre étudiants : <?php echo $nombreEtudiants; ?>. Moyenne du groupe :
		<?php if ($nombreEtudiants != 0) {
			echo round($somme / $nombreEtudiants, 2);
		} ?>. </p>

</body>

</html>