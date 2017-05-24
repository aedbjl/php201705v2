<?php
if (isset($_GET['twid'])) {
    $twid = $_GET['twid'];
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
            echo 'OK';
        } else {
            echo 'XX';
        }


    }

//    $n12=substr($twid,0,1);
//    echo "{$n12}";

//    $subject=$twid;
////    $pattern='/^[0][9][0-9]{8}$/';
//    $pattern='/^[A-Z][12][0-9]{8}$/';
//    $r=preg_match($pattern, $subject);
//    echo $r;


//   $mystring='abc'
//   $findme='d';
//   $pos= strpos($mystring,$findme);
//   if ($pos !==false){
//       echo 'OK';
//   }else{
//       echo 'not';
//   } 判斷A-Z是否符合
}
?>
<form>
    <input type="text" name="twid"/>
    <input type="submit" value="check"/>


</form>
