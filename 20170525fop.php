<?php
//$fp=@fopen('./ffff.txt','r')or die('die');
////if($fp){
////    echo 'OK';
////}else{
////    echo 'XX';
////}
//while($line=fgets($fp)){
//    $len=strlen($line);
//    echo "{$len}:{$line}<br>";
//}
//fclose($fp);
//
//$fp=@fopen('./AAAA.txt','w+');
//fwrite($fp,"HEEEEEEEEEE");
//fclose($fp);

//$data=file("AAAA.txt");
//foreach($data as $line){
//    echo "==>$line<br>";
//}
//
//$data=file_get_contents("AAAA.txt");
//echo $data.'<br>';錯誤 需修正
$data=file("179.csv");
?>
<table width="100%" border="3px">
<!--    <tr>-->
<!--        <th>first</th>-->
<!--        <th>first2</th>-->
<!--        <th>first3</th>-->
<!--        <th>first4</th>-->
<!--        <th>first5</th>-->
<!--    </tr>-->
    <?php
    foreach($data as $line){
        $fileds=explode(',',$line);
        echo '<tr align="center">';
        foreach($fileds as $field){
            echo '<td style="height:150px;width:200px" align="center" valign="middle">'.$field.'</td>';
        }
        echo '</tr>';
    }
    ?>
</table>

