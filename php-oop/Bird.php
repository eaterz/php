<?php

class Bird{
    public $color;
    public $age;

    //konstruktors
    public function __construct($c, $a){
        $this->color = $c;
        $this->age = $a;
    }

    public function __destruct(){
        echo $this->color." is dead <br>";
    }

    public function fly(){
    echo "fly away ".$this->color." bird he is ".$this->age." year old!<br>";
}

}

