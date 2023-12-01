<?php

include_once "Vehicle.php";

class Car extends Vehicle{
    public static $describe="Masina ir parvietosanas lidzeklis.";

    static function makeNoise(){
        echo "beep beep";
    }
}