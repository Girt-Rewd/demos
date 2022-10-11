<?php 
//declare(strict_types=1);

// Créer et utiliser une fonction

function writeMsg() {
    echo "Hello world!";
  }
  
  writeMsg(); // appel la fonnction
echo "<br>";
function inverseChaine($chaine) {
    $chaineInverse="";
    $i=0;
    for ($i=0;$i<strlen($chaine);$i++){
    $chaineInverse=$chaine[$i].$chaineInverse;
    }
    return $chaineInverse;
  }
  $chaine="bonjour";

  $nouvelleChaine = inverseChaine($chaine);
  echo "Chaine inversée :  $nouvelleChaine";
  echo "<br>";
  //Parametre par défaut

  function decompter($depart,$fin=0,$saut=-1) {
    for ($i=$depart; $i>=$fin; $i=$i+$saut) {
    echo "$i,";
    }
    echo "<br />" ;
    }

    // afficher 5,4,3,2,1,0,
       decompter(5);
       // afficher 5,4,3,
       decompter(5,3);

       // afficher 5,3,1,
       decompter(5,1,-2);
       echo "<br>";

       function addNumbers($a,$b) {
        return $a + $b;
      }
      echo addNumbers(5,"5 days");
       // Il est possible de forcer les types de paramètres avec l’instruction declare(strict_types=1).
      // declare(strict_types=1); mais il faut l'instruction au deut du fichier 
       function additionner(float $n1, float $n2) {
          return $n1 + $n2; 
        }
      // echo additionner(2.5, 1.2);
    

?>