<?php

$numero = 1;
$numero1 = 10;
$numero2 = 14;

if ($numero > $numero1 && $numero > $numero2) {
    echo "El mayor es: $numero";
} elseif ($numero1 > $numero && $numero1 > $numero2) {
    echo "El mayor es: $numero1";
} else {
    echo "El mayor es: $numero2";
}

?>