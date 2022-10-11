<?php
    // *****************************************************************************************
	// Description   : Classe abstraite parente de toutes les contrôleurs spécifiques
	// Date        : 27 novembre 2021
	// Auteur      : Dini Ahamada
	// Collaborateur : Aucun
    // *****************************************************************************************
	//Créer une classe abstraite Controleur
	abstract class Controleur {
		// ******************* Attributs 
		//declarez un tableau qui contiendra tous erreurs
		protected $messagesErreur = array();
		
		// ******************* Constructeur vide
		//creer un constructeur sans paramètre
		public function __construct() {}
		
		// ******************* Accesseurs 
		//retourner le tableau de message erreurs 
		public function getMessagesErreur() { return $this->messagesErreur; }

		// ******************* Méthode abstraite executer action
		// Cette méthode :
		//  - gère la session (s'il y en a une)
		//  - valide les données reçues en POST (s'il y en a)
		//  - effectue le travail requis par l'action (interactions avec les DAO, ...)
		//  - retourne le nom de la vue à appliquer (en format string, sans le chemin(path))
		// Créer la méthode abstraite executerAction
		abstract public function executerAction();
		
	}
	
?>