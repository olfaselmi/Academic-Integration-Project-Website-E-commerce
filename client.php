<?PHP
class Client{
	private $Id_clt;
	private $Nom;
	private $Prenom;
	private $Adresse;
	private $Password;
	private $codepostal;
	private $numero;
	private $Email;
    private $anniv;
	function __construct($Id_clt,$Nom,$Prenom,$Adresse,$Password,$codepostal,$numero,$Email,$anniv){
		$this->Id_clt=$Id_clt;
		$this->Nom=$Nom;
		$this->Prenom=$Prenom;
		$this->Adresse=$Adresse;
		$this->Password=$Password;
		$this->codepostal=$codepostal;
		$this->numero=$numero;
		$this->Email=$Email;
        $this->anniv=$anniv;
	}
	
	function getidC(){
		return $this->Id_clt;
	}
	function getNom(){
		return $this->Nom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
	function getmail(){
		return $this->Email;
	}
	function gettelephone(){
		return $this->numero;
	}
	function getadressC(){
		return $this->Adresse;
	}
	function getpassword(){
		return $this->Password;
	}
	function getcodepostal(){
		return $this->codepostal;
	}
function getanniv(){
		return $this->anniv;
	}

	function setidC($Id_clt){
		$this->Id_clt=$Id_clt;
	}
         function setanniv($anniv){
		$this->anniv=$anniv;
	}

	function setNom($Nom){
		$this->Nom=$Nom;
	}
	function setPrenom($Prenom){
		$this->Prenom=$Prenom;
	}
	function setmail($Email){
		$this->Email=$Email;
	}
	function settelephone($numero){
		$this->numero=$numero;
	}
	function setadressC($Adresse){
		$this->Adresse=$Adresse;
	}
	function setpassword($Password){
		$this->Password=$Password;
	}
	
	function setcodepostal($codepostal){
		$this->codepostal=$codepostal;
	}
	
}

?>