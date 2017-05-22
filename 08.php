<?php
//$a='10';
//switch($a){
//    case 1:
//        echo 'ok';
//        break;
//    case 10:
//        echo 'ok3';
//        break;
//    case 100:
//        echo 'ok2';
//        break;
//    default :
//        echo 'XX';
//        break;
//}
$month=rand(1,12);
switch($month){
    case 1:case 3:case 5:case 7:case 8:case 10:case 12:
        echo 31;
        break;
    case 4:case 6:case 9:case 11;
    echo 30;
    break;
    case 2;
        echo 28;
        break;
    default:
        break;

}