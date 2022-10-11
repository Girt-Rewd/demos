<?php
/*****************************************************************************************
 * Fichier PHP contenant des fontions pour afficher des produits en format HTML             
 * Date   : 2021/11/14
 * Auteur : Dini Ahamada 
 *****************************************************************************************/
include_once "../modele/produit.class.php";
 /* ---------- Fonction pour afficher un produit avec image dans une division ----------- */
function afficherUnProduit($unProduit){
    echo "<div class='div70pct'>";
    echo "<img src='../images/". $unProduit->getUrlPhoto() . "' class='imageProduit' alt='" . $unProduit->getDescription() . "'>";
    echo "<h2>" . $unProduit . "</h2>";
    echo "</div>";
}
/* ---------- Fonctions pour afficher une liste de produits dans une liste ul    ------- */
function afficherDesProduits($unTableau, $unTitre = "Liste de produit"){
    echo "<div>";
    echo "<h2>".$unTitre. "</h2>";
    echo "<ul>";
    foreach ($unTableau  as $item){
        echo "<li>" . $item. "</li>";
    }
    echo "</ul>";
    echo "</div>";
}
