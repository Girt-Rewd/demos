<?php
/* Description : DAO pour la classe produit de la BD commerce
	Date        : 21 Nov 2021
    Auteur      : Dini Ahamada
	*/

// ****** INLCUSIONS *******

// Importe l'interface DAO et la classe Produit

include_once("DAO.interface.php");
include_once("../../modele/produit.class.php");

// ****** CLASSE *******
/*
	 Pour chaque classe du modèle (ex : Produit) qui a une table
	  correspondante dans la BD, on crée 
	  une classe ClasseXDAO<ClasseX> qui implémentera, 
	  au moins, toutes les méthodes décrites dans l’interface DAO. 
	  Cette classe ne contiendra pas de constructeur ni d’attributs.
	   Elle ne contiendra que des méthodes statiques qui permettront 
	   de faire le lien entre les tables de la BD et les objets de 
	   type ClasseX. 
	   La classe ProduitDAO utilise les méthodes statiques 
	   getInstance() et close() 
	   de la classe ConnexionBD pour communiquer avec la base de données
	*/
class ProduitDAO implements DAO
{

	// Cette méthode doit retourner l'objet dont la clé primaire a été reçu en paramètre
	// Notes : 1) On retourne null si non-trouvé, 
	//         2) Si la clé primaire est composée, alors le paramètre est un tableau assiociatif
	// ici la seule $clés est un int représentant le code du produit
	public static function chercher($cles)
	{
		// obtenir la connexion
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}

		// valeur par défaut pour la variable à retourner si non-trouvée
		$unProduit = null;
		// Préparer une requête de type PDOStatement avec des paramètres SQL	
		$requete = $connexion->prepare("SELECT * FROM produit WHERE code=?");
		// Exécuter la requête
		$requete->execute(array($cles));
		// Analyser l’enregistrement, s’il existe, et créer l’instance du Produit
		// note on pourait aussi lancer une exception si on a plus d’un résultat …
		if ($requete->rowCount() != 0) {
			//la méthode fetch : pour obtenir un enregistrement(ligne par ligne) 
			//à la fois dans un tableau associatif.
			$enr = $requete->fetch();
			$unProduit = new Produit(
				$enr['code'],
				$enr['description'],
				$enr['marque'],
				$enr['url_photo'],
				$enr['prix'],
				$enr['quantite']
			);
		}
		// fermer le curseur de la requête 
		$requete->closeCursor();
		//et fermer la connexion à la BD
		ConnexionBD::close();
		// retourner le produit
		return $unProduit;
	}

	// Cette méthode doit retourner une liste de tous les objets reliés à la table de la BD
	static public function chercherTous()
	{
		//	return self::chercherAvecFiltre("");

		// obtenir la connexion
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		// initialisation du tableau vide
		$tableau = [];
		// Préparer une requête de type PDOStatement avec des paramètres SQL	
		$requete = $connexion->prepare("SELECT * FROM produit ");
		// Exécuter la requête
		$requete->execute();
		// Analyser les enristrements s'il y en a 
		foreach ($requete as $enr) {
			$unProduit = new Produit(
				$enr['code'],
				$enr['description'],
				$enr['marque'],
				$enr['url_photo'],
				$enr['prix'],
				$enr['quantite']
			);
			// ajouter les produits dans le tableau un à la fois																
			array_push($tableau, $unProduit);
		}

		// fermer le curseur de la requête 
		$requete->closeCursor();
		//et la connexion à la BD
		ConnexionBD::close();

		// retourner le tableau
		return $tableau;
	}

	// Comme la méthode chercherTous, mais en applicant le filtre (clause WHERE ...) reçue en param.
	static public function chercherAvecFiltre($filtre)
	{
		// obtenir la connexion
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		// initialisation du tableau vide
		$tableau = [];
		// Préparer une requête de type PDOStatement avec des paramètres SQL	
		// $filtre = "like %FFd%";
		//
		// $filtre = "WHERE"
		$requete = $connexion->prepare("SELECT * FROM produit " . $filtre);
		// Exécuter la requête
		$requete->execute();
		// Analyser les enristrements s'il y en a 
		foreach ($requete as $enr) {
			$unProduit = new Produit(
				$enr['code'],
				$enr['description'],
				$enr['marque'],
				$enr['url_photo'],
				$enr['prix'],
				$enr['quantite']
			);
			// ajouter les produits dans le tableau un à la fois																
			array_push($tableau, $unProduit);
		}

		// fermer le curseur de la requête 
		$requete->closeCursor();
		//et la connexion à la BD
		ConnexionBD::close();

		// retourner le tableau
		return $tableau;
	}


	// Cette méthode doit retourner une liste de tous les objets reliés à la table de la BD
	static public function chercherTous2()
	{
		return self::chercherAvecFiltre("");
	}

	static function inserer($unProduit)
	{
		// on essaie d’établir la connexion
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		// On prépare la commande insert
		$requete = $connexion->prepare("INSERT INTO produit (code,description,marque,prix,quantite,url_photo) VALUES (?,?,?,?,?,?)");
		// On l’exécute, et on retourne l’état de réussite (true/false)
		$tableauInfos = [
			$unProduit->getCode(), $unProduit->getDescription(), $unProduit->getMarque(),
			$unProduit->getPrix(), $unProduit->getQuantite(), $unProduit->getUrlPhoto()
		];
		return $requete->execute($tableauInfos);
	}

	// Cette méthode modifie tous les champs (non-clé primaire) de l'objet reçu en paramètre dans la table
	// Retourne true/false selon que l'opération a été un succès ou pas.
	static public function modifier($unProduit)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		// On prépare la commande update
		$requete = $connexion->prepare("UPDATE produit SET description=?,marque=?,prix=?,quantite=?,url_photo=? WHERE code=?");

		// On l’exécute, et on retourne l’état de réussite (true/false)
		$tableauInfos = [
			$unProduit->getDescription(), $unProduit->getMarque(),
			$unProduit->getPrix(), $unProduit->getQuantite(), $unProduit->getUrlPhoto(), $unProduit->getCode()
		];
		return $requete->execute($tableauInfos);
	}
	// Cette méthode supprime l'objet reçu en paramètre de la table
	// Retourne true/false selon que l'opération a été un succès ou pas.
	static public function supprimer($unProduit)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		// On prépare la commande delete (on utilise le code seulement comme paramètre)
		$requete = $connexion->prepare("DELETE FROM produit WHERE code=?");
		// On l’exécute, et on retourne l’état de réussite (true/false)
		$tableauInfos = [$unProduit->getCode()];
		return $requete->execute($tableauInfos);
	}

	// ================================== Exercice #1 =================================================
	//************************************ A compléter *************************************************
	// Cette méthode retourne la liste de tous les produit qui sont entre deux prix et que la description 
	//contient la partieDescritpion.
	// ............. À faire en exercice avec requête paramétrée (ne pas utiliser 
	//les autres méthodes de la classe)


	// Cette méthode ajuste la quantite en stock d'un item (paramètre positif on ajoute, paramètre négatif on enleve)
	// ............. À faire en exercice avec requête paramétrée (ne pas utiliser les autres méthodes de la classe)

}
