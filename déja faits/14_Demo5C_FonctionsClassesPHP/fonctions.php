<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <?php
    //déclaration d’une fonction
    function sayHello()
    {
        echo "Greetings Mofos";

        // appel de la fonction sayHello (exemple de syntaxe)
    }

    function inverseChaine($chaine)
    {
        $chaineInverse = "";
        $i = 0;
        for ($i = 0; $i < strlen($chaine); $i++) {
            $chaineInverse = $chaine[$i] . $chaineInverse;
        }
        return $chaineInverse;
    }

    function decompter($depart, $fin = 0, $saut = -1)
    {
        for ($i = $depart; $i >= $fin; $i += $saut) {
            echo "$i, ";
        }
        echo "<br>";
    }

    function additionner(int $a, int $b)
    {
        return $a + $b;
    }

    ?>
    <div class="container">

        <?php
        sayHello();
        ?>
        <br>


        <?php
        $variableChaine = "Bonjour";
        $nouvelleChaine = inverseChaine($variableChaine);
        echo "<p class = \"fs-5\">Chaine inversée : " . $nouvelleChaine . "</p>";

        /*decompter(5);

    // avec 2 paramètres
    decompter(5, 3);

    // avec 3 paramètres
    decompter(5,1,-2);*/

        echo "<p>" . additionner(3, 4) . "</p>";
        
        ?>

    </div>
</body>

</html>