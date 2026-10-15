<?php

const N = 10;
$suma = 0;

for($i = 1; $i <= N; $i ++){
    $suma += $i;
    echo "Suma acumulada $suma <br>";
}
echo "La media Aritmetica:" . ($suma / N) . "<br>";



?>