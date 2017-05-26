<?php
include "functionapi.php";


$mybike=new BIKE;
$urbike=new BIKE;
$mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();
$urbike->upSpeed();$urbike->upSpeed();$urbike->upSpeed();$urbike->downSpeed();

echo "My= {$mybike->getSpeed()}<br>";
echo "Ur= {$urbike->getSpeed()}<br><hr>";


$myScooter=new Scooter;
$myScooter->upSpeed();
echo "Myscooter={$myScooter->getSpeed()}";
