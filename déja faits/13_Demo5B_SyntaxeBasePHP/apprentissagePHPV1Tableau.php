<?php
//Pour que un programme php soit exécuté il faut  que : 
// le fichier ait l'extension php
/* le code soit contenu entre
 <?php  code PhP ?>
*/

//Les tableaux indexes sont des tableaux dont les cases sont accesssibles
// via un indice numérique
// Il y a deux facons de les créer : avec array() ou avec []

$tabEtudiants = [];
$tabNotes = array(75,53,84,75);

echo $tabNotes[0] . "<br>" ;
$valeur = $tabNotes[2]; // 3e case du tab
echo $valeur . "<br>";

$valeur = $tabNotes[2]=36; // remplacer l'ancienne par la nouvelle
echo $valeur . "<br>";

// Obtenir la longueur du tableau
$longueur = count($tabEtudiants);

echo $longueur . "<br>";

$longueur1 = count($tabNotes);

echo $longueur1 . "<br>";

// Un tableau associatif utilise une chaine de caractère comme indice
// on parle alors de clé (key) au lieu d'indice
// $nomTableau = ["clé"=>"Valeur"]
$notes=["Alain"=>80, "Brigitte"=>92, "Christ"=>76];
//Pour acceder à une case, on utilise la clé au lieu d'un indice
$noteB = $notes["Brigitte"];
echo $noteB . "<br>";

// parcourir un tableau avec foreach

foreach ($notes as $note) {
echo "La note ",$note . "<br>";
}
$somme=0;
# ($tableau as $cle => $valeur)
foreach ($notes as $nom=> $uneNote) {
echo "La note de ",$nom," est ",$uneNote . "<br>";
$somme+=$uneNote;
}
echo " La somme : $somme";
echo "<br>";



?>