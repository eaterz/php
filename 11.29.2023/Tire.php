<?php
class Tire{
    public $size;
    public $type;
    private $quality;

    public function __construct($s, $t, $q){
        $this->size = $s;
        $this->type = $t;
        $this->quality = $q;

    }
     public function Izvada(){
       echo $this->size."<br>".$this->type;
    }

    public function Change($sChange,$tChange,$qChange){
       $this-> size = $sChange;
       $this-> type = $tChange;
       $this-> quality = $qChange;
       echo $this->size."<br>".$this->type."<br>";
    }

    public function  __destruct(){
        echo "<br>BOOM!";
    }
}