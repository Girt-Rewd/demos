<?php
class Rectangle
{
    // Attributs
    private $largeur;
    private $hauteur;
    private $couleur;
    // Constructeur avec valeur par défaut pour la couleur si non spécifiée
    public function __construct($largeur, $hauteur, $couleur = "Blanc")
    {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
        $this->couleur = $couleur;
    }
    // Accesseurs et mutateurs
    public function get_largeur()
    {
        return $this->largeur;
    }
    public function get_hauteur()
    {
        return $this->hauteur;
    }
    public function get_couleur()
    {
        return $this->couleur;
    }
    public function set_couleur($valeur)
    {
        $this->couleur = $valeur;
    }
    // Méthodes spécifiques
    public function calculer_aire()
    {
        return $this->largeur * $this->hauteur;
    }
    public function calculer_perimetre()
    {
        return ($this->largeur + $this->hauteur) * 2.0;
    }
    // Affichage
    public function __toString()
    {
        return "Rectangle " . $this->couleur . " de " . $this->largeur . " X " . $this->hauteur;
    }
}
