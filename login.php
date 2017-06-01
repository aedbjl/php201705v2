<?php
include 'sql.php';
session_start();


if(isset($_POST['account'])){
    $pdo=new pdo($dsn,$user,$password,$opt);
    $account=$_POST['account'];
    $password=$_POST['password'];
    $sql="select * from member where account=?";

    $stmt=$pdo->prepare($sql);
    $stmt->execute([$account]);
    if($stmt->rowCount()>0){
        $memberObj=$stmt->fetchObject();
//        echo "$memberObj->id";
        if(password_verify($password,$memberObj->password)){
            $_SESSION['member']=$memberObj;
            header('Location:main.php');
        }else {
            echo 'X1';
        }

    }else {
        echo'XX';
    }

}

?>




<form method="post">
    account:<input type="text" name="account"><br>
    password:<input type="password" name="password"><br>
    <input type="submit" value="login"><br>
</form>
