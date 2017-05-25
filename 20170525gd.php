<?php
if(!isset($_GET['rate']))exit(0);
$rate=$_GET['rate'];
$rs= imagecreate(400,40);

$color=imagecolorallocate ( $rs , 255 , 255 , 0 );
$color2=imagecolorallocate ( $rs , 255 , 0 , 0 );

imagefilledrectangle ( $rs , 0 , 0 , 400 , 40 , $color );
imagefilledrectangle ( $rs , 0 , 0 ,(int)($rate*400/100) , 40 , $color2 );

header('Content-type:image/jpeg');

imagejpeg($rs);

imagedestroy($rs);

