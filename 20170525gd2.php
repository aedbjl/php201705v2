<?php

$rs=imagecreatefromjpeg('./upload/pikachu_hi_pokemon.jpg');
$blue=imagecolorallocate ( $rs , 0 , 0 , 255 );
imagettftext ( $rs , 40 , 0 , 0 , 200 ,
    $blue , "./upload/fireflysung.ttf" ,
    "HELOOO" );

header('Content-type:image/jpeg');

imagejpeg($rs);

imagedestroy($rs);