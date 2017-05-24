<?php
include'functionapi.php';
$myLotte=createLottery();
foreach($myLotte as $number){
    echo "{$number}<br>";
}
