<?php
$account=$_POST['account'];
$passw=$_REQUEST['passw'];
$birthday=$_REQUEST['birthday'];
$area=$_REQUEST['area'];
$gender=$_REQUEST['gender'];
$like=$_REQUEST['like'];
$ee=$_REQUEST['ee'];
echo $account.'<br>';
echo $passw.'<br>';
echo $birthday.'<br>';
echo $area.'<br>';
echo $gender.'<br>';
foreach($like as $a){
    echo $a.'<br>';
}
echo $ee.'<br>';