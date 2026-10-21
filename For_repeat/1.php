<?php

const N = 10;
$penultimo = 0;
$ultimo = 1;

for($i = 0; $i < N;$i++){
    echo $penultimo,",";
    $nuevoNumero = $penultimo + $ultimo;
    $penultimo = $ultimo;
    $ultimo = $nuevoNumero;

}
echo "<br> Estas son las secuencias";

?>