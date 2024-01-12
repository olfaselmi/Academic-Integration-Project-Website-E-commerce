<?PHP
class packvar{
	private $resultat1;
    private $resultat2;
    private $resultat3;
    private $resultat4;
    private $resultattot;
	function __construct($resultat1,$resultat2,$resultat3,$resultat4,$resultattot){
		$this->resultat1=$resultat1;
		$this->resultat2=$resultat2;
        $this->resultat3=$resultat3;
		$this->resultat4=$resultat4;
		$this->resultattot=$resultattot;
	}
	
	function getresultat1(){
		return $this->resultat1;
	}
	function getresultat2(){
		return $this->resultat2;
	}
	function getresultat3(){
		return $this->resultat3;
    }
    function getresultat4(){
		return $this->resultat4;
    }
    function getresultattot(){
		return $this->resultattot;
	}
	

	function setresultat1($resultat1){
		$this->resultat1=$resultat1;
	}
	function setresultat2($resultat2){
		$this->resultat2=$resultat2;
	}
	function setresultat3($resultat3){
		$this->resultat3=$resultat3;
    }
    function setresultat4($resultat4){
		$this->resultat4=$resultat4;
    }
    function setresultattot($resultattot){
		$this->resultattot=$resultattot;
	}
	
}

?>