<?php
class BIKE{
    private $speed;
    function upSpeed(){
        $this->speed=($this->speed<1)?1:$this->speed*1.5;
    }
    function downSpeed(){
        $this->speed=($this->speed<0)?0:$this->speed*0.6;
    }
    function getSpeed(){
        return $this->speed;
    }
}
$mybike=new BIKE;
$urbike=new BIKE;
$mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();
$urbike->upSpeed();$urbike->upSpeed();$urbike->downSpeed();$urbike->downSpeed();

echo "My= {$mybike->getSpeed()}<br>";
echo "Ur= {$urbike->getSpeed()}";
