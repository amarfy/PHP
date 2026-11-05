<?php

function actualizarPuntos(&$saldo, float $cantidad){
    if($saldo >= $cantidad){
        $saldo -= $cantidad;
        return true;
    }
    return false;
}
$saldo = 160;
$retiro1 = actualizarPuntos($saldo, 150);
echo "Retiro 1: " . ($retiro1 ? "Realizado": "No realizado") . "<br>"." Saldo: $saldo €<br>";

$retiro2 = actualizarPuntos($saldo, 100);
echo "Retiro 2: " . ($retiro2 ? "Realizado" : "No realizado") . "<br>" ." Saldo: $saldo €<br>";



?>