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
    <title>Modèle - MVC</title>

    <link rel="stylesheet" href="css/labo6.css" />
</head>

<body>
    <?php
			// ==================== Inclusion de l'entête ===================== 
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
                <li>
                    <a href='?action=choisirProduit'>Choisir un produit</a>
                </li>
                <li class='option_active'>
                    <a href='?action=administration'>Administration</a>
                </li>

                <li>
                    <a href='https://www.crosemont.qc.ca' target='_blank'>Collège Rosemont</a>
                </li>
            </ul>
            <!--------------- FIN DU MENU --------------->
        </div>
        <div class="zone_centre">

            <h2>Les produits</h2>

            <?php
						// ==================== Utilisation des fonctions d'affichage ===================== 
						include "/vues/inclusions/fonctionsAdministration.inc.php";
                        afficherTableProduits($controleur->getTabProduits());
					
					?>


        </div>
        <div class="zone_droite">
            Fait pour le cours 420-G16-RO
        </div>
    </div>
</body>

</html>