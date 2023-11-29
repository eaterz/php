<?php

include "Tire.php";

$myTire = new Tire(500,"Winter","bad");

$myTire->Izvada();
echo "<br><br>";
$myTire->Change(20,"Summer","good");
