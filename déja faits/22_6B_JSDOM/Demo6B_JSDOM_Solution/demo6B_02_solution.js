/*************************************************************
 * Fichier  : exerices4B_02.js
 * Descr.   : demonstration de lien de parenté (.children)
 * Nom      :
 * Date     :
 ************************************************************** */

// Fonction qui affiche les éléments, ses enfants,
//ses petits-enfants, ...
// jusqu'à n niveau
function fct(cetObjet, n) {
  // // obtenir le premier enfant de l'élément
  //alert(cetObjet.firstElementChild.nodeName);
  // obtenir le dernier enfant de l'élément
  // alert(cetObjet.lastElementChild.nodeName);
  //obtenir le parent de l'élément
  // var parentItem1 = document.getElementById("item1").parentElement.nodeName;
  //alert(parentItem1);
  // obtenir l' enfant précédent de l'élément h2
  // var enfantPrecedent =
  //  document.getElementById("titre2").previousElementSibling.nodeName;
  //alert(enfantPrecedent);
  // obtenir l' enfant suivant de l'élément h2
  //var enfantSuivant =
  //   document.getElementById("titre2").nextElementSibling.nodeName;
  // alert(enfantSuivant);

  // alert(cetObjet.nextElementSibling.nodeName);
  alert(fct2("-->", cetObjet, n));
}

// Fonction récursive qui contruit la chaine de caractère représentant
//un objet et ses enfants
// de façon indentée (paramètre début) pour n niveau de profondeur.
function fct2(debut, cetObjet, n) {
  // Nom de l'objet courant
  var message = debut + cetObjet.nodeName + ":\n";
  // Indentation pour ces enfants
  var nouveauDebut = "         " + debut;
  if (n > 0) {
    var enfants = cetObjet.children;
    // pour chacun de ses enfants
    for (var i = 0; i < enfants.length; i++) {
      // on appelle récursivement la fonction
      // pour formatter le nom de chaque enfant
      message += fct2(nouveauDebut, enfants[i], n - 1);
    }
  }
  return message;
}
