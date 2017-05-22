<?php
$x = $_GET['xx'];
$y = $_GET['yy'];
//$r = $x + $y;

//if (isset($_GET['xx'])) {
////    $x = $_GET['xx'];
////    $y = $_GET['yy'];
//    $r = $x + $y;
////    echo "$x+$y=$r </br>";
//}

if (option[i]){
    $r = "$x {option[i]} $y";
}


?>



<form>
<!--<form action="4.php">-->
<input type="text" name="xx" id="x" value="<?php echo $x;?>"/>

<select>
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>

</select>

<input type="text" name="yy" id="y" value="<?php echo $y;?>"/>
<input type="submit" value="=" >

    <?php
    echo $r;

    ?>

</form>