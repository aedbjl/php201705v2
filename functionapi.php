<?php
class cart{
    private $member;
    private $list;
    function __construct()
    {
        $this->list=array();
        $this->member;
    }
    function addItem($pid,$qty){
        $this->list[$pid]=$qty;
    }
    function removeItem($pid){
        unset($this->list[$pid]);
    }
    function getlist(){
        return $this->list;
    }
    function getMember(){
        return $this->member;
    }
}


class member{
    var $twid; // Member Object has-a TWID Object
    function __construct($twid){
        $this->twid=new Twid($twid);
    }
}
class Twid{
    var $id;
    static $counter;
    function __construct($id)
    {
        $this->id=$id;
        Twid::$counter++;
    }
    function getTWID(){return $this->id;} //???
    function getGender(){
        return "true";
    }
    function getArea(){

    }
    static function checkid($twid){
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
}

class BIKE{
    function __construct(){
        echo 'construct<br>';
//
    }

    protected $speed=0;
    function upSpeed(){
        $this->speed=($this->speed<1)?1:$this->speed*1.5;
    }
    function downSpeed(){
        $this->speed=($this->speed<1)?0:$this->speed*0.6;
    }
    function getSpeed(){
        return $this->speed;
    }

}

class Scooter extends BIKE{
    function __construct()
{
    parent::__construct();
    echo '55555';
}

    function upSpeed()
    {
        parent::upSpeed(); // TODO: Change the autogenerated stub
       $this->speed*=2;
    }


}

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