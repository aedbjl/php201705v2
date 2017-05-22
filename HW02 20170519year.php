<?php
$x = $_GET['year'];
?>
<form>
    <input type=text" name="year" id="x" value="<?php echo $x; ?>">
    <input type="submit" value="check">
    <?php
    $x = $_GET['year'];
    $r = $x % 4000;
    if ($x) {
        if ($r == 0) {
            echo '不潤阿';
        } else if ($r != 0) {
            $s = $x % 400;
            if ($s == 0) {
                echo '潤阿';
            } else if ($s != 0) {
                $y = $x % 100;
                if ($y == 0) {
                    echo '不潤阿';
                } else if ($y != 0) {
                    $p = $x % 4;
                    if ($p == 0) {
                        echo '潤阿';
                    } else {
                        echo '不潤阿';
                    }
                }
            }
        }

    }
    ?>
  dasddas;
</form>