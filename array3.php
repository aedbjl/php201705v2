<?php
$a=array(1,2,3,4);
$b[]=$a;
$b[]=array(1,2);
echo count($b[0]);
//var_dump($b);