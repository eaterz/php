<?php 

abstract class Animals{
    public $name;
    protected $age;

    public function __construct($name,$age){
       
        $this->name = $name;
        $this->age = $age;
    }
}