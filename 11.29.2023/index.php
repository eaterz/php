<?php

include "Tire.php";
include "Car.php";
include "Train.php";

// $myTire = new Tire(500,"Winter","bad");

// echo $myTire->size."<br>".$myTire->type."<br>";

// Car::makeNoise();
// echo "<br><br>";



$myTrain2 = new Train("tesla","kaka",50);
$myTrain2->increaseMileage(240);
Train::makeNoise();
var_dump($myTrain2);
