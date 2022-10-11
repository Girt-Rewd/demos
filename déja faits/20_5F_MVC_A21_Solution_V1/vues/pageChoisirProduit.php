<!-- On redirige vers l'inde du site si on essaie d'avoir une accès direct -->
<?php if(!ISSET($controleur)) header("Location: ..\index.php");?>

<!DOCTYPE html>
<!-- 	
  Cours 420-G16-RO
 Date        : 27 novembre 2021
 Auteur      : Dini Ahamada
   
-->
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Modele - MVC</title>
    <link rel="stylesheet" href="css/labo6.css" />
</head>

<body>
    <?php
			// ==================== Inclusion de l'entête ===================== 
			// .. insérez le fichier contenant la bannière de l'entête
			include_once "vues/inclusions/entete.inc.php";
		?>
    <div class="conteneur_principal">
        <div class="zone_gauche">
            <h2>Produits G16</h2>
            <!---------------- MENU --------------------->
            <ul>
                <li>
                    <a href='?action=voirPageAccueil'>Accueil</a>
                </li>
                <li>
                    <a href='?action=voirProduits'>Voir les produits</a>
                </li>
                <li class='option_active'>
                    <a href='?action=choisirProduit'>Choisir un produit</a>
                </li>
                <li>
                    <a href="?action=administration">Administration</a>
                </li>
                <li>
                    <a href='https://www.crosemont.qc.ca' target='_blank'>Collège Rosemont</a>
                </li>
            </ul>
            <!--------------- FIN DU MENU --------------->
        </div>
        <div class="zone_centre">
            <div class="contenu_centre_petit">
                <h2>Recherche</h2>
                <div>
                    <form action="?action=choisirProduit" method="post">
                        <input type="hidden" name="formulaireInfosProduit" value="true" />
                        <div>
                            <h3>Type de recherche :</h3>
                            <input id="type" type="radio" name="typeRecherche" value="parCode" checked="checked" />
                            <label for="type">Par Code</label>
                            <input id="type" type="radio" name="typeRecherche" value="parDescription" />
                            <label for="type">Par Description</label>
                        </div>
                        <div>
                            <h3>Information :</h3>
                            <label for="info">Code/Description</label>
                            <input id="info" type="text" maxlength="16" name="information" />
                        </div>
                        <div>
                            <input type="submit" value="Soumettre" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="contenu_centre_petit">
                <h2>Produits</h2>

                <?php
						// ==================== Utilisation des fonctions d'affichage ===================== 
						include "/vues/inclusions/fonctions.inc.php";
						if (count($controleur->getTabProduits())==0) {
							echo "Aucun élément trouvé. Recommencez la recherche.";
						} else {
							afficherTableProduits($controleur->getTabProduits());
						}
					?>

            </div>
        </div>
        <div class="zone_droite">
            Fait pour le cours 420-G16-RO
        </div>
    </div>
</body>

</html>