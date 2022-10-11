<!DOCTYPE html>
<html lang="fr">
<!-- 
	Fichier     : Démo 5B 02, formulaire
	Description : fichier php qui récupère la requête get
	Auteur      : Dini Ahamada
	Date        : 2021-11-07
-->
<html lang="fr">

<head>
    <title>démo5B_02</title>
    <meta charset="UTF-8" />
</head>

<body>
    <h1>variables dans l'url (méthode GET) récupérés par $_GET</h1>
    <!------------- Récupérez et affichez les résultats------------>
    <!--- Un nom et un âge et en faire un message de bienvenu dans un h2-->
        <?php
            $nom = $_GET["nom"];
            $age = $_GET["age"];
            $nombre = $_GET["nombre"];
            echo "<h2>Bonjour $nom. Vous avez $age ans.</h2>";        
        ?>

    <!-- Récupérer un nombre représentant le nombre de paragraphes "bonjour" que l'on veut afficher -->
    <?php
    for($i= 0; $i<$nombre; $i++){
        echo "<p> Bonjour </p>";    
    }
    ?>
</body>

</html>