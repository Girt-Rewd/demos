/*
 *  Démonstration : Chapitre 6A  Annexe #01 
 *  Description   : JS avec 3 erreurs 
 *  Session A2022, Dini Ahamada
*/
function calculerSomme(limiteA, limiteB) {
	var somme = 0;
	var i = 0;
	alert("testA");

	for (i = limiteA; i <= limiteB; i++) {
		somme += i;
	}
	/*

	alert("Somme : " + somme}; */
}

/* 
* solution, les erreurs sont :
*   Ligne  9 :  il faut un point-virgule au lieu d'une virgule avant le i++
*   Ligne 10 :  on a un m de trop dans somme
*   Ligne 12 :  il faut une ) au lieu de } à la fin.
*/