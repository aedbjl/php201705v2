<?php
include 'functionapi.php';
session_start();
////$myScooter=new Scooter();
//if(Twid::checkid('A123456789')==1) {
//    $twid = new Twid('A123456789');
//    echo $twid->getGender() ? 'male' : 'female';
//    $twid2 = new Twid('A123456789');
//    $twid1 = new Twid('A123456789');
//    $twid4 = new Twid('A123456789');
//    echo Twid::$counter;
//
//
//}else {
//    echo"XX";
//}

$memberobj=new member('A123456798');
$cartobj=new cart($memberobj);

$var1 =10;

$_SESSION['cart']=$cartobj;
$_SESSION['var1']=$var1;


$var1++;

$cartobj->addItem('j',4);
$cartobj->addItem('i',5);
$list =$cartobj->getlist();
foreach($list as $pid=>$qty){
    echo "{$pid}:{$qty}<br>";
}
?>
<hr>
<a href="20170526session.php">next</a>
