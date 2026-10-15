<?php
const N = 10;
$a =0;
$b =1;
for($i =0; $i < N; $i++){
    echo $a . " ,";
    $c = $a + $b;
    $a = $b;
    $b = $c;

}

echo "<br>"

?>