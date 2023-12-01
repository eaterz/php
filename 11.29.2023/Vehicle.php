<?php

abstract class Vehicle{
    public $brand;
    protected $mileage;

    
  public function __contruct($b,$m){
    $this->brand = $b;
    $this->mileage = $m;
 }
 public function __destruct(){
      echo $this->brand." is dead at mileage ".$this->mileage."<br>";
  }
}