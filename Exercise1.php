<?php
    $x = 0;
    $y = 1;
    $string = "";
    echo "<table>";
    for($x; $x <= 100; $x++) {
        echo "<tr>";
        if ($x == 0) {echo "<td></td>";}
        else {echo "<td>" . $x . "</td>";}
        for($y; $y <= 100; $y++) {
            if ($x == 0) {
                echo "<td>" . $y . "</td>";
            } else {
                echo "<td>" . $x*$y . "</td>";
            }  
        }
        echo "</tr>";
        $y = 1;
    }
    echo "</table>";

    ?>