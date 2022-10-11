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

function afficherMenuV1() {
		// ########################################################################### -->
		// Partie 2E et 3E : remplacez le ZZZ par la bon nom d'action à accomplir      -->
		// ########################################################################### -->

		$tableauOptions=[ "Accueil"=>"index.php?=voirPageAccueil",
						  "Administration"=>"index.php?action=administration",
						  "Recherche d'un District"=>"index.php?action=chercherUnDistrict",
						  "Collège Rosemont"=>"https://www.crosemont.qc.ca/",
						  "W3 schools"=>"https://www.w3schools.com/"];
		foreach ($tableauOptions as $option => $hyperlien) {
			echo "<div>";
			echo "<a href='$hyperlien'>$option</a>";  
			echo "</div>";
		}
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
?>

<?php
function afficherTableProduits($unTableau) { ?>

<table>

    <thead>
        <tr>
            <th>code</th>
            <th>Description</th>
            <th>Prix unitaire</br>suggéré</th>
            <!--
            <th>Photo</th>  -->
            <th>Administration</th>
        </tr>
    </thead>

    <tbody>
        <?php
	foreach ($unTableau as $unProduit) { ?>
        <tr>
            <td><?=$unProduit->getCode()?></td>
            <td><?=$unProduit->getDescription()?></td>
            <td><?=$unProduit->getPrix()?></td>
            <!--
            <td> <img src="images"<?=$unProduit->getUrlPhoto()?> /></td>
	-->
            <td>
                <a title="modifier"
                    href="?action=administration&modifier=<?=$unProduit->getCode()?>"><button>Modifier</button></a>

                </a>

                <a title=" supprimer"
                    href="?action=administration&id=<?=$unProduit->getCode()?>"><button>Supprimer</button></a>

                </a>
            </td>


        </tr>

        <?php } ?>

    </tbody>
</table>


<a href="?action=formulaire" style="margin:auto; text-align:center; display:block;"><button>Ajouter un
        produit</button></a>


<?php } ?>