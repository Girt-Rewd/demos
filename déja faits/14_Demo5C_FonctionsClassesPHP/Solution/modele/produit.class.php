<?php
/*
  Classe représentant un produit à vendre dans un commerce
  Auteur      : Dini Ahamada
	Date        : 2021-11-07
*/
class Produit {
	// Attributs
	private $code;
	private $description;
	private $urlPhoto;
	private $prix;
	private $quantite;

	// Constructeur
	public function __construct($code,$desc,$url,$prix,$qte=0){
		$this->code=$code;
		$this->description=$desc;
		$this->urlPhoto=$url;
		$this->prix=$prix;
		$this->quantite=$qte;
	}
	
	// Accesseurs et mutateurs
	public function getCode() {return $this->code;}
	public function getDescription() {return $this->description;}
	public function getUrlPhoto() {return $this->urlPhoto;}
	public function getPrix() {return $this->prix;}
	public function getQuantite() {return $this->quantite;}
	public function setDescription($valeur) {$this->description=$valeur;}
	public function setUrlPhoto($valeur) {$this->urlPhoto=$valeur;}
	public function setPrix($valeur) {$this->prix=$valeur;}

	// Autres méthodes
	public function ajouterAuStock($quantiteAjoutee) {
		$this->quantite+=$quantiteAjoutee;
	}
	public function enleverDuStock($quantiteEnlevee) {
		$this->quantite-=$quantiteEnlevee;
	}
	public function changerPrixPct($pourcentage) {
		$changement=$pourcentage/100.0*$this->prix;
		$this->prix+=$changement;
	}
	
	// Affichage
	public function __toString(){
		$message="[#".$this->code."] ".$this->description;
		$message.=" @".round($this->prix,2)."$ (".$this->quantite." en stock)";
		return $message;
	}
}
?>