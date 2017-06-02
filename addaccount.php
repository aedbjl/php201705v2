<?php
include 'sql000.php';
$pdo=new pdo($dsn,$user,$password,$opt);

if(!isset($_REQUEST['account']))header('Location:addMemberv2.php');

$account=$_REQUEST['account'];
$passwd=password_hash($_REQUEST['passwd'],PASSWORD_DEFAULT);
$realname=$_REQUEST['realname'];
$sql="INSERT INTO member(account,passwd,realname) VALUES(?,?,?)";
$stmt=$pdo->prepare($sql);
$stmt->execute([$account,$passwd,$realname]);


