<!DOCTYPE html>
<!--
  Fichier PHP pour tester la classe Produit
 Auteur      : Dini Ahamada
	Date        : 2021-11-07
-->
<html lang="fr">

<head>
    <title>Démo5C_01</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../../css/styleTable.css" />
</head>

<body>
    <!---- Création d'un produit (après avoir inclu le fichier contenant la classe) ---->
    <?php
		include "../produit.class.php";
        $chemin_fichier_image="../../images/Marteau_101.png";
		$unProduit=new Produit(101,"Marteau",$chemin_fichier_image,12.87,25);
    ?>
    <h1>Fichier de test pour la classe produit</h1>


    <!---- Utilisation et affichage des méthodes -->
    <table>
        <thead>
            <tr>
                <th>Méthode</th>
                <th>Résultat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>toString</td>
                <td><?php echo $unProduit;?></td>
            </tr>
            <tr>
                <td>getCode</td>
                <td><?php echo $unProduit->getCode();?></td>
            </tr>
            <tr>
                <td>getDescription</td>
                <td><?php echo $unProduit->getDescription();?></td>
            </tr>
            <tr>
                <td>getUrlPhoto</td>

                <td><?php echo '<img src="' . $unProduit->getUrLPhoto() .'">';?></td>
            </tr>
            <tr>
                <td>getPrix</td>
                <td><?php echo $unProduit->getPrix();?></td>
            </tr>
            <tr>
                <td>getQuantite</td>
                <td><?php echo $unProduit->getQuantite();?></td>
            </tr>
            <tr>
                <td>
                    setDescription("Marteau FisherPrice")</br>
                    setPrix(5.55)</br>
                    setUrlPhoto("Marteau_103.png")
                </td>
                <td>
                    <?php
						$unProduit->setDescription("Marteau FisherPrice");
						$unProduit->setPrix(5.00);
                        $chemin_fichier_image="../../images/Marteau_103.png";
						$unProduit->setUrlPhoto($chemin_fichier_image);
						echo $unProduit."<br/>";
						echo "URL: ".$unProduit->getUrlPhoto();
                     
                       echo '<img src="' . $unProduit->getUrLPhoto() .'">';
					?>
                </td>
            </tr>
            <tr>
                <td>
                    ajouterAuStock(11)</br>
                    enleverDuStock(6)</br>
                    changerPrixPct(12.0)</br>
                    changerPrixPct(-2.0)</br>
                </td>
                <td>
                    <?php
						$unProduit->ajouterAuStock(11);
						$unProduit->enleverDuStock(6);
						$unProduit->changerPrixPct(12.0);
						$unProduit->changerPrixPct(-2.0);
						echo $unProduit;
					?>
                </td>
            </tr>
        </tbody>
    </table>
    <br />
    <img alt="Diagramme de classes" src="../../images/ClasseProduit.png" width="500" />

    <!---- Retour au fichier d'accueil -->
    <h2><a href="../../index.php">Retour à la page d'accueil</a></h2>
</body>

</html>