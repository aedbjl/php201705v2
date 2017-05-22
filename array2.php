<?php

$a=array(1,2,3,aaaa=>4,5);
foreach ($a as $key=>$V){
    echo $key.':'.$V.'<br>';
}

echo '<hr>';

$a=[1,2,3,4,5];

for ($i=0;$i<5;$i++){
    echo $i.':'.$a[$i].'<br>';
}