<?php
//f(x)=2x+1

function fx($x)
{
    $ret = 2 * $x + 1;
    return $ret;
}

function say($who, $pre = 'HAHAH')
{
    echo "{$pre},{$who}<br>";
}

echo '<hr>';

function sayhello()
{
    $names = func_get_args();
    foreach ($names as $name) {
        echo "Hello,{$name} <br>";
    }
}

function isRight($twid)
{
    $ret=false;
    if (preg_match($pattern = '/[A-Z][12][0-9]{8}/', $twid)) {
        $n12s = substr($twid, 0, 1);
//       echo"{$n12}";

        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $n12 = strpos($letters, $n12s) + 10;
//       echo $n12;
        $n1 = (int)($n12 / 10);
        $n2 = $n12 % 10;
        $n3 = substr($twid, 1, 1);
        $n4 = substr($twid, 2, 1);
        $n5 = substr($twid, 3, 1);
        $n6 = substr($twid, 4, 1);
        $n7 = substr($twid, 5, 1);
        $n8 = substr($twid, 6, 1);
        $n9 = substr($twid, 7, 1);
        $n10 = substr($twid, 8, 1);
        $n11 = substr($twid, 9, 1);
        $sum = $n1 * 1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 * 1 + $n11 * 1;
        if ($sum % 10 == 0) {
//            echo 'OK';
            $ret=true;
//        } else {
//            echo 'XX';
        }
        return $ret;
    }
}


function createLottery(){
    $number=range(1,49);
    shuffle($number);
    for($i=0;$i<6;$i++){
        $ret[]=$number[$i];
    }
    sort($ret);
    return $ret;


}