<?php
session_start();
if (!isset($_SESSION['id'])) header('Location:20170531 A&P.php');
$id=$_SESSION['id'];
$account=$_GET['account'];
$password=$_GET['password'];
$name=$_GET['name'];
$sql="update member set account='{$account}',password='{$password}',name='{$name}' where id={$id}";

$db = @new mysqli('127.0.0.1',
    'root','root','iii');
$db->query($sql);
header("Location: 20170531 A&P.php");