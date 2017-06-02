
<?php

if (!isset($_GET['a'])) echo 'F1';


include 'sql000.php';
$pdo=new pdo($dsn,$user,$password,$opt);

$sql="select * from member where account=?";
$account=$_GET['a'];
$stmt=$pdo->prepare($sql);
$stmt->execute([$account]);
if($stmt->rowCount()>0){
    echo'F2';
}else{
    echo'OK';
}