/*************************************************************
 * Fichier  : demo6B_03.js
 * Descr.   : demonstration de manipulation de style
 * Nom      :
 * Date     :
 ************************************************************** */

//
function itemActif(numero) {
  // obtenir les itemMenu en utilissant la méthode getElementsByClassName
  var items = document.getElementsByClassName("itemMenu");
  // modifier tous les itemMenu pour enlever tous les itemMenu-actif
  // en utilisant la méthode remove

  for (var i = 0; i < items.length; i++) {
    items[i].classList.remove("itemMenu-actif");
  }
  // activer le bon menu en utilisant la méthode add
  items[numero].classList.add("itemMenu-actif");
}

// cacher l'item s'il est affiché, et afficher le s'il est caché
// en utilisant la méthode toggle
function itemSelectionne(numero) {
  // selectionner un item selon son numero à partir
  // tous les sousMenuHaut utilissant la méthode getElementsByClassName
  var item = document.getElementsByClassName("sousMenuHaut")[numero];
  // cacher l'item s'il est affiché, et afficher le s'il est caché
  // en utilisant la méthode toggle
  item.classList.toggle("cache");
  //document
  // .getElementsByClassName("sousMenuHaut")
  // [numero].classList.toggle("cache");
}
