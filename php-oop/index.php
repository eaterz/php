<?php

include "Dog.php";
include "Cat.php";
include "Bird.php";

$myDog = new Dog;
$myDog->color = "Black";

$myBird = new Bird("black", 18);
$myBird->fly();

$myBird2 = new Bird("white", 20);

$myBird2->fly();



$arr=[];

for($i=0;$i<10;$i++){
    array_push($arr, new Cat);
    
}



?>