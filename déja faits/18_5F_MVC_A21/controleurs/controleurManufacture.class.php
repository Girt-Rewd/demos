<?php
// *****************************************************************************************
// Description   : classe contenant la fonction statiquu qui géère les contrôleurs spécifiques
// Date        : 27 novembre 2021
// Auteur      : Dini Ahamada
// *****************************************************************************************

include_once("controleurs/controleurAccueilDefaut.class.php");
include_once("controleurs/controleurVoirProduits.class.php");
include_once("controleurs/controleurChoisirProduit.class.php");

class Manufacture
{
	//  Méthode qui crée une instance du controleur associé à l'action
	//  et le retourne
	public static function creerControleur($action)
	{
		$controleur = null;
		if ($action == "voirProduits") {
			
			$controleur = new VoirProduits();
		} elseif ($action == "choisirProduit") {
			$controleur = new ChoisirProduit();
		} else {
			$controleur = new AccueilDefaut();
		}
		return $controleur;
	}
}
