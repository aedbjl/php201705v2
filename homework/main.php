<?php
include 'sql000.php';
$pdo=new pdo($dsn,$user,$password,$opt);

$sql="select account from member where id";

$stmt=$pdo->prepare($sql);
$stmt->execute();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>



</head>
<body>


        <?php
        $goal=0;
        while ($obj = $stmt->fetchObject()) {

            $rs = rand("$obj->account",10);
            if ($rs <= "$obj->account") {
                $goal += 1;
            } else {
                $goal += 0;
            }

        }
        ?>


<form>
    <table width="100%" border="3px">
        <tr>
            <td><?php echo "$goal" ;?></td>
            <td></td>
            <td>5</td>
            <td>5</td>
        </tr>
        <tr>
            <td>5</td>
            <td>5</td>
            <td>5</td>
            <td>5</td>
        </tr>
    </table>
</form>


</body>


