/**
 * Fichier : demo6C_03.js
 */

// Variable globale (à éviter ...) pour contenir le chronomètre
var timerX=undefined;

// Fonction qui démarre ou supprime le chronomètre
function gererAnimation(duree){
	 // Si la variable globale timerX n'est pas vide
	 // ... le timer est actif, donc on doit le fermer

		 // Si la variable globale timerX n'est pas vide
		 // ... le timer n'est pas actif, donc on doit l'ouvrir

		 
	 // mais avant on appelle la fonction de déplacement
		 // pour réagir directement au click.

		 // et le timer va appeler la fonction à tous les "duree" ms.

}

// Fonction qui prend la position de l'image dans sa division
// de 10% de la largeur de la division ou retourne au
// début si l'image sort de la division
// Notes : 
//			- l'attribut offsetLeft nous donne la position en x de l'image 
//			- l'attribut clientWidth nous donne la largeur en de la division 
function deplacerImage() {
	// obtenir l'image et la division dans laquelle elle se trouve

	// ... nouvelle position = position actuel + 10% de la largeur de la division

	// ... position maximal = largeur de la division - largeur de l'image

	// ... si on dépasse la position maximale, on replace la nouvelle position au début (à 10)

	// ... on applique la nouvelle position calculer (à travers son style)

}
