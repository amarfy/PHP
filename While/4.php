<?php
$saldo = 500;
$mes = 0;

while($saldo < 1000){
    $saldo = $saldo + $saldo *0.020;
    $mes ++;

}

echo "Meses: $mes" . "<br>";
echo "Total Ahorrado: ". $saldo /2;




?>