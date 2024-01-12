<?php
class carte{
    private $num;
    private $points;
    private $cinclient;
   

    public function __construct($num,$points,$cinclient)/*on peur avoir q'un sel constructeur*/ 
    {
        $this->num=$num;
        $this->points=$points;
        $this->cinclient=$cinclient;
        
    }
    public function getnum(){return $this->num;}
    public function getpoints(){return $this->points ;}
    public function getcinclient(){return $this->cinclient;}
    
    
    public function setcin($num){$this->num=$num;}
    public function setnom($points){$this->points=$points;}
    public function setprenom($cinclient){$this->cinclient=$cinclient;}
   }
    ?>