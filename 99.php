<table width="100%" border="10px">

        <?php
        $start= 2; $col= 4; $line= 2;
        for($k=0;$k<$line;$k++){
            echo '<tr>';
            for ($h = $start; $h <$start+$col; $h++) {
                $L= $h + $k*$col;
                if ($h % 2 == 0) {
                    if ($k % 2 == 0) {
                        echo "<td bgcolor='yellow'>";
                    } else {
                        echo "<td bgcolor='red'>";
                    }
                } else {
                    if ($k % 2 != 0) {
                        echo "<td bgcolor='yellow'>";
                    } else {
                        echo "<td bgcolor='red'>";
                    }
                }
                for ($i = 1; $i <= 9; $i++) {
                    $r = $L * $i;
                    echo "{$L}x{$i}=$r<br>";
                }
                echo '</td>';
            }
            echo '</tr>';
        }

        ?>






</table>