<!DOCTYPE html>
<!-- 
	Fichier     : Demo 5B #01 
	Description : Syntaxe de base en PHP
	Auteur      : Dini Ahamada
	Date        : 2021-11-07
-->
<html lang="fr">

<head>
    <title>démo5B_00</title>
    <meta charset="UTF-8" />
</head>

<body>
    <!------------- CODE HTML NORMAL ------------>
    <h1>Titre généré directement en HTML</h1>
    <p>ce paragraphe aussi</p>

    <!------------- CODE GÉNÉRÉ PAR PHP (chiffre aléatoire) ------------>
    <!--Remarque : La fonction rand() génère un entier aléatoire.-->
    <!---Générez un nombre entier aléatoire en PHP avec la fonction rand -->

    <!------------- CODE HTML NORMAL AVEC UN BOUT GÉNÉRÉ PAR PHP------------>
    <h1>De nouveau généré par HTML</h1>
    <?php 
    $nombreAleatoire = rand(1, 10);
    ?>
    <p>
        <!--Affichez le nombre généré  -->
        Le chiffre aléatoire choisi est affiché avec php:
        <?php 
            echo $nombreAleatoire;
            ?>
    </p>


    <!------------- UTILISATION DES CONDITIONS --------------------------->
    <p>
        <!--Affichez pair s'il s'agit d'un nombre pair ou impair s'il un nombre impair  -->
        Ce chiffre est :
            <?php 
                if ($nombreAleatoire%2 == 0) {
                    # code...
                    echo "Pair <br>";
                }
                else {
                    echo "Impair <br>";
                }
                ?>
        tel que determiné et affiché avec une condition PHP
    </p>

    <!------------- UTILISATION DES BOUCLES --------------------------->
    <p>
        <!--Affichez les 3 chiffres qui suivent le nombre généré  -->
        Et voici les 3 chiffres qui suivent, générés et affichés avec PHP, sont :
            <?php
                for ($i=0; $i < 3; $i++) { 
                    # code...
                    $nombreAleatoire++;
                    echo $nombreAleatoire;
                    echo " ";
                }    
            ?>

    </p>


</body>

</html>