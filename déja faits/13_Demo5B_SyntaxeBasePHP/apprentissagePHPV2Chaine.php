<?php
//Pour que un programme php soit exécuté il faut  que : 
// le fichier ait l'extension php
/* le code soit contenu entre
 <?php  code PhP ?>
*/
//Les chaines de caractères ne sont pas immuables
// la concatenation se fait avec le point au lieu de plus
$nom="Dini";
$chaine = "Salut ".$nom . "! <br>";
echo $chaine;
//La fonction strlen() renvoie la longueur d'une chaîne.
$nombreLettre = strlen($nom);

echo " Le nombre des lettres dans la chaines est : " . $nombreLettre ."<br>";
// extraire une sous-chaine
//substr($ch,debut,longueur)
$milieu =substr($nom,3,5);
echo "la sous chaine :$milieu " . "<br>";
//La fonction strtoupper() convertit une chaîne en majuscule.
echo "Maj : ". strtoupper($nom) . "<br>";
//La fonction strtolower() convertit une chaîne en minuscules.
echo "Mini : ". strtolower($nom) . "<br>";
$prenom = " Ali";
$nomComplet =$prenom . " " .$nom;
echo "Nom complet : $nomComplet ". "<br>";
//recherche :
//La fonction stripos() trouve la position de la première occurrence 
//d'une chaîne à l'intérieur d'une autre chaîne.
// strpos($ch,$sousCh,debut);
$position = strpos($nomComplet,"li");
echo " position : $position ". "<br>";

//str_replace(vieux,nouv.,$ch)
//remplacer i par 3 dans la chaine "Dini"
$code = str_replace("i","3",$nom);
echo " Remplacement : $code" . "<br>";
//La fonction trim() supprime les espaces 
// et autres caractères prédéfinis des deux côtés d'une chaîne.
$propre=trim( " Bonjour toi \n");
echo " Enlevement de l' espace : $propre" . "<br>";
//La fonction exploser() décompose une chaîne en un tableau.
// $tab=explode("séparateur",$ch);
$tab =explode(":", "Paul:1345: 11.56");
echo " element 1 du Tableau : $tab[0]" . "<br>";
echo "Le tab contient :";
foreach($tab as $t){
echo "$t <br>";
}
$chaine="un,deux,trois,quatre";
$tableChiffre=explode("," , $chaine);

echo "Le tableChiffre contient :";
foreach($tableChiffre as $t){
    echo "$t <br>";
    }

//La fonction isset() vérifie
// si une variable est définie, ce qui 
//signifie qu'elle doit être déclarée et n'est pas NULL.
$a = 0;
// vrai car $a est défini
if (isset($a)) {
  echo "Variable 'a' est defini.<br>";
}

$b = null;
// Faux car $b est NULL
if (isset($b)) {
  echo "Variable 'b' is n'est pas défini.";
}

?>