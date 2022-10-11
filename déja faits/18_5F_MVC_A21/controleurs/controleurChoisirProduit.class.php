<?php

 // *****************************************************************************************
	// Description   : Contrôleur spécifique pour l'action de choisirProduit qui s'occupe de chercher
	//                 un produit selon critère de recherche
    // Date        : 27 novembre 2021
	// Auteur      : Dini Ahamada
    // *****************************************************************************************
  	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/ProduitDAO.class.php");
    class ChoisirProduit extends Controleur{
        	// ******************* Attributs
		private $tabProduits;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabProduits=array();
		}
		
		// ******************* Accesseurs
		public function getTabProduits(){
			return $this->tabProduits;
		}
        public function executerAction()
        {
            //Vérifiez si le formulaire contenant les Infos Produit est bien soumis
            if(isset($_POST['formulaireInfosProduit'])){
                //Vérifier si le typeRecherche est parDescription
                if($_POST['typeRecherche']== 'parDescription'){
                    $filtre="WHERE description LIKE '%".$_POST['information']."%'";
                    $this->tabProduits=ProduitDAO::chercherAvecFiltre($filtre);	
                } else{
                    //Si le typeRecherche est par code
                    $unCode = $_POST['information'];
                    $unProduit = ProduitDAO::chercher($unCode);
                    if($unProduit!=null){
                        array_push($this->tabProduits,$unProduit);
                    }                    
                }
            }
            
            //retourner la pageChoisirProduit
            return "pageChoisirProduit";
        }
   }

?>