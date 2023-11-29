<?php

include "Tire.php";

$myTire = new Tire(500,"Winter","bad");

echo $myTire->size."<br>".$myTire->type;
