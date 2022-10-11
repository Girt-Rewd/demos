<!-- On redirige vers l'index du site si on essaie d'avoir une accès direct -->
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
    <title>Le modèle - MVC</title>
    <!--  <link rel="stylesheet" href="<?php echo DOSSIER_BASE_LIENS;?>/css/labo6.css" />  -->
    <link rel="stylesheet" href="css/labo6.css" />
</head>

<body>
    <?php
			// ==================== Numéro 5a :  inclusion de l'entête ===================== 
			// .. insérez le fichier contenant la bannière de l'entête
		//	include_once DOSSIER_BASE_INCLUDE."vues/inclusions/entete.inc.php";
			include_once "vues/inclusions/entete.inc.php";
		?>
    <div class="conteneur_principal">
        <div class="zone_gauche">
            <h2>Produit G16</h2>
            <!---------------- MENU --------------------->
            <ul>
                <li class='option_active'>
                    <!-- Lien, action vers le controleur par defaut de la page d'accueil -->

                    <a href='?action=voirAccueil'>Accueil</a>
                </li>
                <li>
                    <a href="?action=voirProduits">Voir les produits</a>
                </li>
                <li>
                    <a href="?action=choisirProduit">Choisir un produit</a>
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
                <h2>OUTILLAGE</h2>
                <div>
                    Quelque soit votre métier, vous utilisez des outils à mains.
                    C'est pourquoi, nous vous proposons ici une très large offre
                    d'outils à main que ce soit pour travailler le bois, visser,
                    scier, raboter, mesurer, tracer, affuter ou encore pour équiper,
                    ranger et organiser votre atelier.
                    Tous nos outils à mains sont de qualité
                    et ont été séléctionnés et testés par nos propre clients.
                    Du simple tournevis au ciseau à bois en passant
                    par la caisse à outils ou encore les outils de serrage,
                    nos outils à mains répondrons aux besoins d'un menuisier,
                    ébéniste, charpentier, plombier, carreleur
                    ou encore cuisiniste et même pour les bricoleurs !
                </div>
            </div>
            <div class="contenu_centre_petit">
                <h2>Livraison</h2>
                <div>
                    Nous assurons les expéditions du lundi au vendredi avec notre partenaire FedEx.
                    Les commandes en stock sont expédiées le jour même jusqu'à 15h30.
                </div>
            </div>
            <div class="contenu_centre_petit">
                <h2>Options</h2>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th rowspan="2">Couleur</th>
                                <th colspan="3">Finis</th>
                            </tr>
                            <tr>
                                <th>Standard</th>
                                <th>Métallique</th>
                                <th>Mat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Bleu</th>
                                <td>X</td>
                                <td>X</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Rouge</th>
                                <td>X</td>
                                <td></td>
                                <td>X</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="zone_droite">
            Fait pour le cours 420-G16-RO
        </div>
    </div>
</body>

</html>