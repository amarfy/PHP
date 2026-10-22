<?php

const A = 30;
for($i = 1; $i <= A; $i++){

    for($j = 1; $j <= (A - $i); $j++){
        echo "&nbsp";
    }

    for($k = 1; $k <= (2 * $i) - 1; $k++){
        echo "*";
    }
    echo "<br>";
    
}

?>