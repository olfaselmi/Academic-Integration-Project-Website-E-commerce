<?PHP
class eventvar{
	private $nb;
	private $date;
	private $oc;
	private $pack;
	function __construct($nb,$date,$oc,$pack){
		$this->nb=$nb;
		$this->date=$date;
		$this->oc=$oc;
		$this->pack=$pack;
	}
	
	function getoc(){
		return $this->oc;
	}
	function getpack(){
		return $this->pack;
	}
	function getdat(){
		return $this->date;
	}
	function getnb(){
		return $this->nb;
	}
	

	function setdate($oc){
		$this->oc=$oc;
	}
	function setoc($oc){
		$this->oc=$oc;
	}
	function setpack($pack){
		$this->pack=$pack;
	}
	function setnb($nb){
		$this->nb=$nb;
	}
	
}

?>