<?PHP
class Promotion{
	private $idpromo;
	private $nompromo;
	private $datedebut;
	private $datefin;
	private $pourcentage;
	private $image;
	function __construct($idpromo,$nompromo,$datedebut,$pourcentage,$datefin){
		$this->idpromo=$idpromo;
		$this->nompromo=$nompromo;
		$this->datedebut=$datedebut;
		$this->datefin=$datefin;
		$this->pourcentage=$pourcentage;
	}
	
	function getidpromo(){
		return $this->idpromo;
	}
	function getnompromo(){
		return $this->nompromo;
	}
	function getdatedebut(){
		return $this->datedebut;
	}
	function getpourcentage(){
		return $this->pourcentage;
	}
	function getdatefin(){
		return $this->datefin;
	}
	function setnompromo($nompromo){
		$this->nompromo=$nompromo;
	}
	
	function setdatedebut($datedebut){
		$this->datedebut;
	}
	function setpourcentage($pourcentage){
		$this->pourcentage=$pourcentage;
	}
	function setdatefin($datefin){
		$this->datefin=$datefin;
	}
	
}

?>