/**
 * Fichier : demo4C_01.js
 * Description : agrandit temporairement une photo pendant un interval de temps
 */

// agrandit une photo pendant une interval de temps, puis la rapetisse à son format original
function agrandirPhoto(facteur,duree) {
	var image = document.getElementById("image");
    image.height = image.height * facteur;
    setTimeout("rapetisserPhoto("+facteur+")", duree);


}

// rapetisse une photo par un facteur
function rapetisserPhoto(facteur) {
    var image = document.getElementById("image");
    image.height = image.height/ facteur;
}
