<?php

$edad = 25;
$sueldo = 30;

if($edad > 18 && $sueldo >= 22000){
    echo "Debes pagar impuestos\n";
}else{
    echo "No debees pagar impuestos\n";

    if($edad <= 18 && $sueldo <= 22000){
        echo "Eres menor de 18 y ganas poco\n";
    }elseif($edad <= 18){
        echo "eres menor de edad\n";
    }else{
        echo "ganas poco";
    }
  
}

?>