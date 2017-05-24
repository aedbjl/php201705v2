<?php
$a=array();
for($i=0;$i<52;$i++){

    do {
        $temp = rand(0, 51);
        //檢查機制
        $isRepeat = false;
        for ($j = 0; $j < $i; $j++) {
            if ($a[$j] == $temp) {
                $isRepeat = true;
                break;
            }
        }


    }while ($isRepeat) ;

//    if($isRepeat){
//        $i--;
//        continue;


//    }
//}else{
        $a[$i]=$temp;
//    }



//    $a[$i]=rand(0,51);
    echo $a[$i].'<br>';
}






