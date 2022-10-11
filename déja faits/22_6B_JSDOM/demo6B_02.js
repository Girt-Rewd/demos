/*************************************************************
 * Fichier  : exerices6B_02.js
 * Descr.   : demonstration de lien de parenté (.children)
 * Nom      :
 * Date     :
************************************************************** */ 

// Fonction qui affiche les éléments, ses enfants, ses petits-enfants, ...
// jusqu'à n niveau
function fct(cetObjet,n) {
	alert(cetObjet.firstElementChild.nodeName);
	//alert(fct2("-->",cetObjet,n));
}

// Fonction récursive qui contruit la chaine de caractère représentant un objet et ses enfants
// de façon indentée (paramètre début) pour n niveau de profondeur. 
function fct2(debut,cetObjet,n) {
	// Nom de l'objet courant
	// Indentation poour ces enfants
}	
