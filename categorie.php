<?php
class Categorie{
	private $id_categorie;
	private $nom_categorie;

	function __construct($idCa,$nomCa){
		$this->id_categorie=$idCa;
		$this->nom_categorie=$nomCa;
	}
	
	function getIdCategorie(){
		return $this->id_categorie;
	}

	function getNomCategorie(){
		return $this->nom_categorie;
	}
	
	function setIdCategorie($id_categorie){
		$this->id_categorie=$id_categorie;
	}	
	
	function setNomCategorie($nom_categorie){
		$this->nom_categorie=$nom_categorie;
	}
}

?>