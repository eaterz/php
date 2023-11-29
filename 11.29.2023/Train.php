<?php

class Train{
 public $brand;
 public $trackGauge;
 private $mileage;

 public function __contruct($b,$t,$m){
    $this->brand=$b;
    $this->trackGauge=$t;
    $this->mileage=$m;
 }

  public function __destruct(){
        echo $this->brand." is dead at mileage ".$this->mileage;
  }

  public function increaseMileage($amount){
    $this->mileage+=$amount;
    
  }

  static function makeNoise(){
        echo "choo, choo!<br>";
    }
}