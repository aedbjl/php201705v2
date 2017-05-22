<?php
//$a =0;
//$b =0;
//$c =0;
//$d =0;
//$e =0;
//$f =0;
$p =array(1=>0,0,0,0,0,0);
for ($i=0;$i<100;$i++){
    $temp=rand(1,9);
    $p[$temp>=7?$temp-3:$temp]++;
//    $p[rand(1,9)]++;
}
//    $X=rand(1,6);
//    switch($X){
//        case 1:$a++;break;
//        case 2:$b++;break;
//        case 3:$c++;break;
//        case 4:$d++;break;
//        case 5:$e++;break;
//        case 6:$f++;break;
//    }
//echo "A=$a<br>";
//echo "B=$b<br>";
//echo "C=$c<br>";
//echo "D=$d<br>";
//echo "E=$e<br>";
//echo "F=$f<br>";
for ($i=1;$i<=count($p);$i++){
    echo "point{$i}={$p[$i]}<br>";
}
