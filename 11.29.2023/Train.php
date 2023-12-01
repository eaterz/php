<?php

include_once "Vehicle.php";

class Train extends Vehicle{

 public $trackGauge;

 public function __construct($b,$t,$m){
      parent::__construct($b,$m); 
    $this->trackGauge = $t;

 }

  public function increaseMileage($amount){
    $this->mileage+=$amount;
    
  }

  static function makeNoise(){
      echo "choo, choo!<br>";
    }
}