<?php
include 'functionapi.php';
session_start();



if(!isset($_SESSION['cart']))header('Location:20170526objectv2.php');

$cartobj=$_SESSION['cart'];
$var1=$_SESSION['var1'];

echo 'Page 2<hr>';
echo $var1 . '<br>';


$list=$cartobj->getlist();


foreach($list as $pid =>$qty){
    echo "{$pid}:{$qty}<br>";

}


?>
<hr>
<a href="20170526logout.php">logout</a>
