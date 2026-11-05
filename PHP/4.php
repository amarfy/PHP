<?php

function actualizarPuntos($importe,&$puntos,&$nivel){
    $ganados = (int)($importe / 10);
    $puntos = $puntos + $ganados;

    if($puntos > 100){
        $nivel = "Oro";
    }elseif($puntos > 50){
        $nivel = "Plata";
    }
    return $ganados;
}
echo "============   SISTEMAS DE PUNTOS PARA EL CLIENTE =============<br>";
$puntos = 45;
$nivel = "Bronce";
$ganados = actualizarPuntos(85, $puntos, $nivel);
echo "Puntos Ganados: $ganados<br>";
echo "Puntos Acumulados: $puntos<br>";
echo "Nivel: $nivel<br>";

echo "============== FELICIDADES SIGUE ACUMULANDO PARA SEGUIR GANANDO ============== "


?>