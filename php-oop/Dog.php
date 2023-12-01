<?php

include "Animals.php";

class Dog extends Animals{
   
    public function birthday(){
        $this->age+=1;
    }

    public function izvada(){
        echo $this->name." ".$this->age."<br>";
    }

    static function makeNoise(){
        echo "woof";
    }
}