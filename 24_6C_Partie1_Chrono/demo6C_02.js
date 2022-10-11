/**
 * Fichier : demo4C_02.js
 * Description : crée des clignotement sur le titre H1 et la bordure de l'image avec setInterval
 */

// agrandit une photo pendant une interval de temps, puis la rapetisse à son format original
function demarrerLesAnimations() {
	// le titre alterne la classe classePourH1 du premier h1 à tous les 1 seconde

	// le titre alterne la classe imageAvecBordure de la première image à tous les 3 secondes

}

// alterne la classe d'un objet
function alternerClasse(typeDeBalise,nomClasse) {
    var cetObjet = document.getElementsByTagName(typeDeBalise)[0];
    cetObjet.classList.toggle(nomClasse);
}
