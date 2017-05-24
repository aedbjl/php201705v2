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
//    temp的key傳給暫存變數x，再將$i的key傳給$temp的key.....
}

foreach ($a as $key => $value)
    echo $value.'<br>';
