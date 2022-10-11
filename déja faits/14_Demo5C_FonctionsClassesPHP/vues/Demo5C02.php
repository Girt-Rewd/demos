<!DOCTYPE html>
<!--
  Page HTML incluant entête, pied de page et l'affichage de produit             
 Auteur      : Dini Ahamada
 Date        : 2021-11-07
-->
<html lang="fr">

<head>
    <title>Démo5C 02</title>
    <meta charset="utf-8" />
    <!-- ajouter le lien relatif pour le fichier styleDemo5C02.css -->
    <link rel="stylesheet" type="text/css" href="../css/styleDemo5C02.css" />
</head>

<body>
    <!-- 1. inclure l'entête -->
    <?php 
        include_once "entete.inc.php";
    ?>
    <!-- 2. Construire un tableau de 5 produits, affichez-les dans une liste ul
	        et affichez celui de la case 2, dans une division avec son image   -->
    <!-- Infos pour les 5 produits :
		(101,"Marteau Master Craft","Marteau_101.png",18.67,34);	
		(102,"Marteau Stanley","Marteau_102.png",25.67,12);	
		(103,"Marteau Fisher Price","Marteau_103.png",11.67,2);	
		(104,"Tournevis Plat","Tournevis_104.png",15.67);	
		(105,"Tournevis Étoile #2","Tournevis_105.png",15.67,2);	
	-->
    <?php 
    include_once "affichage_produit.inc.php";
    $tab = array(
        new Produit(101,"Marteau Master Craft","Marteau_101.png",18.67,34),
        new Produit(102,"Marteau Stanley","Marteau_102.png",25.67,12),
        new Produit(103,"Marteau Fisher Price","Marteau_103.png",11.67,2),
        new Produit(104,"Tournevis Plat","Tournevis_104.png",15.67),
        new Produit(105,"Tournevis Étoile #2","Tournevis_105.png",15.67,2)
    );
    afficherDesProduits($tab);
    afficherUnProduit($tab[2]);
    
    ?>

    <!-- 3. inclure le pied de page -->
    <?php 
        include_once "pied_page.inc.php";
    ?>
</body>

</html>