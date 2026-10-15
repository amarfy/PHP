<?php

const A = 10;

for($i = 1; $i <= A; $i++){
    echo str_repeat("&nbsp;", A - $i ) . str_repeat("*", 2 * $i - 1) . "<br>";
}

?>