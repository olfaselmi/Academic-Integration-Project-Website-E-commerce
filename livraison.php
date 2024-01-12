<?php
class livraison{
	private $id;
	private $date;
    private $idc;

	public function __construct($id,$date,$idc)/*on peur avoir q'un sel constructeur*/ 
	{
        $this->id=$id;
        $this->idc=$idc;
        $this->date=$date;
        


	   
	}
    public function getid(){return $this->id ;}
    public function getidc(){return $this->idc ;}
	public function getdate(){return $this->date ;}
	

    public function setid($id){$this->id=$id;}
    public function setidc($idc){$this->idc=$idc;}
	public function setdate($date){$this->date=$date;}


	} 
	?>