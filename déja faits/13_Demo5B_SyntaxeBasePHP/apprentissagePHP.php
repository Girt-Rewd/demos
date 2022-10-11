<?php
//Pour que un programme php soit exécuté il faut  que : 
// le fichier ait l'extension php
/* le code soit contenu entre
 <?php  code PhP ?>
*/

// pour l'affichage deux fonctions echo et print
// la fin de l'instruction est ;

echo "Hello World <br>";
print "Hello World <br>";
//ou avec parenthese

echo ("Hello World <br>");
print ("Hello World <br>");
// Le symbole $ est utilisé devant les variables
// et l'affectation se fait =
$txt = "PHP";
echo "J'aime $txt <br>";
// en PHP, les mots clé ne sont pas sensibles à la case on peut donc ecrire
Echo "J'aime $txt <br>";
ecHo "J'aime $txt <br>";

// cependant, tous les noms de variables sont sensibles à la case
$couleur ="rouge";
echo "Ma voiture est $couleur <br>";

//Pour concaténer des chaines, on utilise le point (.)
echo "Ma voiture est $couleur " . " Je l'aime la couleur ". $couleur;

// Pas de type à spécifier
$x=8;
$y="Voyo";
$z=$x+999/2.5;
echo "Il s'a git d'un nombre : ". $x . "<br>";
echo "Il s'a git d'une chaine : ". $y . "<br>";
echo "Il s'a git d'une expression : ". $z . "<br>";

// la fin de l'instruction est ;
$x= $x + 8;
//Les blocs sont identifiés par des {}
if($x > 8){
$y=$x-1;
$x=$x*2;
}
echo " x vaut : $x <br>";
echo " y vaut : $y <br>";

// Il est posssible de définir une constante avec la fonction
// define(nomVar, valeur)
define("MA_CONSTANT","Allo");
echo MA_CONSTANT . "<br>";
define("ANNEE",2021 );
echo ANNEE . "<br>";

// La fonction gettype($var) permet d'obtenir le type d'une variable
echo gettype($x) . "<br>";
echo gettype(MA_CONSTANT) . "<br>";
echo gettype($z) . "<br>";

//La fonction PHP var_dump() renvoie le type et la valeur des données
$x = 5985;
echo var_dump($x) . "<br>";

// Egalité à même valeur
echo 9.5=="9.5" . "<br>";
// Egalité à même valeur et même type
//echo 9.5==="9.5" . "<br>";
echo (9==5+4) . "<br>";
echo !(9==5+4) . "<br>";
// les conditions
$age=20;
$coutBillet=30;
if($age<18){ echo " Enfant <br>" ; $coutBillet-=10; } elseif($age>=65)
    {
    echo "Ainé <br>";
    $coutBillet-=5;
    }else{
    echo " Ainé <br>";
    }
    // switch
    $code=3;
    switch($code){
    case 1: echo "code 1 choisi <br>"; break;
    case 2:
    case 3: echo "code 2 ou 3 choisi <br>"; break;
    default : echo "Code autre que 1 à 3 choisi";
    }
     // ? l'opérateur ternaire
     $status=($age<18)? "Enfant" : "Adulte" ; echo $status . "<br>" ;

    // ? repeitifs, les boucles
     // La boucle while : tant que
     $i=0; $somme=0; $n=5; 
     while($i<$n){ $somme+=$i;
        $i++; } 
    echo " La somme est : " . $somme . "<br>" ;
    //La boucle do ... while : faire tant que
     $i=0; $somme=0; $n=5; do { $somme+=$i; $i++; }
     while($i<$n);
        echo " La somme est : " . $somme . "<br>" ; 
     //La boucle for : pour   
    $i=0; $somme=0; $n=5; 
    for($i=0;$i<$n;$i++){ $somme+=$i; 
    }
    echo " La somme est : " . $somme . "<br>" ; 
    //La boucle foreach:

    $tab=["Al","Bob","Cal"]; 
    foreach($tab as $nom){
         echo " $nom <br>" ;
        } ?>