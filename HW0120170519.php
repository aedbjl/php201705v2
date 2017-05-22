<?php

ddddd;
//if (isset($_GET['xx'])){
//    $x = $_GET['xx'];
//    $y = $_GET['yy'];
//        $r = $x + $y;
//}

$A=$_GET['HAHAHA'];
    if($A=="a"){
    if (isset($A)) {
        $x = $_GET['xx'];
        $y = $_GET['yy'];
        $r = $x + $y;

    }}
    else if($A=="b") {
        if (isset($A)) {
            $x = $_GET['xx'];
            $y = $_GET['yy'];
            $r = $x - $y;
        }}
        else if($A=="c") {
            if (isset($A)) {
                $x = $_GET['xx'];
                $y = $_GET['yy'];
                $r = $x * $y;
            }}
else if($A=="d") {
if (isset($A)) {
    $x = $_GET['xx'];
    $y = $_GET['yy'];
    $r = $x / $y;
}}

//    } else if (isset($_GET['HAHAHAAB'])) {
//        $x = $_GET['xx'];
//        $y = $_GET['yy'];
//        $r = $x - $y;
//    } else if (isset($_GET['HAHAHAAC'])) {
//        $x = $_GET['xx'];
//        $y = $_GET['yy'];
//        $r = $x * $y;
//    } else if (isset($_GET['HAHAHAAD'])) {
//        $x = $_GET['xx'];
//        $y = $_GET['yy'];
//        $r = $x % $y;

?>
<form>
    <input type="text" name="xx" id="x" value="<?php echo $x; ?>" />
    <select name="HAHAHA" >
        <option  value="a" <?php if ($A=="a" ) echo "selected" ; ?> >+</option>
        <option  value="b" <?php if ($A=="b" ) echo "selected" ; ?> >-</option>
        <option  value="c" <?php if ($A=="c" ) echo "selected" ; ?> >x</option>
        <option  value="d" <?php if ($A=="d" ) echo "selected" ; ?> >/</option>
    </select>

    <input type="text" name="yy" id="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="="/>
    <?php
        echo $r;
    ?>
</form>