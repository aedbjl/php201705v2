<?php
$a = array();
for ($i=0; $i <= 52; $i++) {
    $a[] = $i;
}
for($i=51; $i>=0;$i--) {
    $temp = rand(0, $i);
//    $a[$i]=$temp;
//    $a[$temp]=$i;
    $x=$a[$temp];
    $a[$temp]=$a[$i];
    $a[$i]=$x;
}

foreach ($a as $key => $value)
    echo $value.'<br>';
