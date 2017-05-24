<?php
$p=range(0,51);
shuffle($p);
//foreach ($p as $value){
//    echo $value.'<br>';
//}
echo '<hr>';
foreach ($p as $i=>$value){
    $player[$i%4][(int)($i/4)]=$value;
}
//foreach ($player[0] as $card){
//    echo "$card<br>";
//}
?>
<table width="100%" border="2 px">

        <?php

        $suit = array("<font color='black' size='5'> &spades; </font>",
            "<font color='red' size='5'> &hearts; </font>",
            "<font color='red' size='5'> &diamond; </font>",
            "<font color='black' size='5'> &clubs;</font>");
        $value =array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
        foreach ($player as $sb){
            echo "<tr>";
            sort($sb);
            foreach($sb as $card){
                echo "<td>{$suit[(int)($card/13)]}{$value[$card%13]}</td>";
            }
            echo "</tr>";
        }

        ?>

</table>
