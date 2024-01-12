<?php
class Produit{
	private $id_produit;
	private $image_produit;
	private $nom_produit;
	private $prix_produit;
	private $qt_produit;
	private $nom_categorie;

	function __construct($id,$image,$nom,$prix,$qt,$nomCa){
		$this->id_produit=$id;
		$this->image_produit=$image;
		$this->nom_produit=$nom;
		$this->prix_produit=$prix;
		$this->qt_produit=$qt;
		$this->nom_categorie=$nomCa;
	}
	
	function getIdProduit(){
		return $this->id_produit;
	}
	function getImageProduit(){
		return $this->image_produit;
	}
	function getNomProduit(){
		return $this->nom_produit;
	}
	function getPrixProduit(){
		return $this->prix_produit;
	}
	function getQtProduit(){
		return $this->qt_produit;
	}
	function getNomCategorie(){
		return $this->nom_categorie;
	}


	function setIdProduit($id_produit){
		$this->id_produit=$id_produit;
	}	
	function setImageProduit($image_produit){
		$this->image_produit=$image_produit;
	}
	function setNomProduit($nom_produit){
		$this->nom_produit=$nom_produit;
	}
	function setPrixProduit($prix_produit){
		$this->prix_produit=$prix_produit;
	}
	function setQtProduit($qt_produit){
		$this->qt_produit=$qt_produit;
	}
	function setNomCategorie($nom_categorie){
		$this->nom_categorie=$nom_categorie;
	}
}

?>