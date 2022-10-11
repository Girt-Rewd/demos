<?php
/******************************************************************
 	Labo 4 #2-3 : Fonctions d'affichage pour le menu et pour 
	              un produit
	Nom         :                                    
*******************************************************************/

// #2 : Utilisez le tableau reçu en paramètre pour afficher les options 
//      du menu dans des éléments li d'une liste ul. 
//      Ajoutez la classe css 'option_active' pour l'élément li correspondant 
//      à l'indice reçu en paramètre.  
//      Voir l'énoncé pdf pour voir ce à quoi doit ressemble le format final.     
function afficherMenu($tableau,$indiceOptionActive) {
	echo "<ul>";
	$i=0;
	foreach ($tableau as $itemMenu => $lien) {
		$classe="";
		if ($indiceOptionActive==$i) {
			$classe=" class='option_active'";
		}
		echo "<li $classe><a href='$lien'>$itemMenu</a></li>";
		$i++;
	}
	echo "</ul>";
}


// #3 : Utilisez les méthodes de la classe Automobile 
//       pour afficher le modèle, la couleur et le prix final dans un liste umask    
function afficherUnProduit($unProduit) {
	echo "<ul>";
	echo "<li>Marque :".$unProduit->getMarque()."</li>";
	echo "<li>Description :".$unProduit->getDescription()."</li>";
	echo "<li>Prix :".$unProduit->getPrix()." $</li>";
	echo "</ul>";
}

// #4 : Utilisez les méthodes de la classe Accessoire 
//       pour afficher le code, la quanite, et le nom 
//       de chaque accessoire du tableau reçu dans une table html_entity_decode    
function afficherTableProduits($unTableau) {
	// ... Début de la table
	echo "<table>";
	// ... Entête de la table 
	echo "<thead>";
	echo "<tr>";
	echo "<th>code</th>";
	echo "<th>Description</th>";
	echo "<th>Prix unitaire</br>suggéré</th>";
	echo "<th>Photo</th>";
	echo "</tr>";
	echo "</thead>";
	// ... Body de table 
	// ******************** à compléter : doit afficher les éléments de $unTableau 

	echo "<tbody>";
	foreach ($unTableau as $unProduit) {
		echo "<tr>";
		echo "<td>".$unProduit->getCode()."</td>";	
		echo "<td>".$unProduit->getDescription()."</td>";	
		echo "<td>".$unProduit->getPrix()."</td>";
		echo  "<td>" . "<img class='imageProduit' alt='".$unProduit->getDescription()."' src='images/".$unProduit->getUrlPhoto()."' />". "</td>";

		echo "</tr>";	
	}
	echo "</body>";
	// *******************
	// ... Fin de la table
 	echo "</table>";
}

?>