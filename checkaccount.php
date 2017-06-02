<?php
include 'sql000.php';
$pdo=new pdo($dsn,$user,$password,$opt);
if(!isset($_REQUEST['account']))header('Location:loginv2.php');

    $account=$_REQUEST['account'];
    $passwd=$_REQUEST['passwd'];
    $realname=$_REQUEST['realname'];
    $sql="select * from member where account=?";

    $stmt=$pdo->prepare($sql);
    $stmt->execute([$account]);

    if($stmt->rowCount()>0){
        $memberObj=$stmt->fetchObject();
        if(password_verify($passwd,$memberObj->passwd)){
            $_SESSION['member']=$memberObj;
            header('Location:main2.php');
            }else{
            header('Location:loginv2.php');
        }
    }else{
        header('Location:loginv2.php');
    }



