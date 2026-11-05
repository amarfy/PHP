<?php

function calcularTotal(float $importe, float $iva, &$total){
    $total = $importe + $iva + ($importe * $iva / 100);
}

$importe = 50;
$iva = 21;

calcularTotal($importe, $iva,$total);
echo "Total a pagar: $total €<br>";


?>