<?PHP
class publicityvar{
	private $theme;
	private $acteurs;
	private $cout;
	private $date;
	private $per;
	function __construct($theme,$acteurs,$cout,$date,$per){
		$this->theme=$theme;
		$this->acteurs=$acteurs;
		$this->cout=$cout;
		$this->date=$date;
		$this->per=$per;
	}
	
	function gettheme(){
		return $this->theme;
	}
	function getacteurs(){
		return $this->acteurs;
	}
	function getcout(){
		return $this->cout;
	}
	function getdat(){
		return $this->date;
	}
	function getper(){
		return $this->per;
	}

	function setacteurs($acteurs){
		$this->acteurs=$acteurs;
	}
	function setcout($cout){
		$this->cout;
	}
	function setdate($date){
		$this->date=$date;
	}
	function setper($per){
		$this->per=$per;
	}
	
}

?>