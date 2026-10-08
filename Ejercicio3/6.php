<?php

$importe = 200;
$es_socio = true;
$edad_cliente = 50;
$descuento = 0;

if($es_socio && $importe > 100){
    $descuento = 20;
}elseif($es_socio && $importe >=50 && $importe <= 100){
    $descuento = 10;
}elseif(!$es_socio && $importe > 200){

    $descuento = 15;
}
    if($edad_cliente > 64){
        $descuento = $descuento + 5;
                  
        }
    if($descuento > 25){
        $descuento = 25;
             
    }
    

  $importe_final = $importe - ($importe * $descuento / 100);

    echo "<br>";
    echo "Importe de compra: $importe euros <br>";
    echo "Descuento Total: $descuento%<br>";
    echo "Importe Final: $importe_final";
    

?>