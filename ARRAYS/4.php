<?php

$catologo = ['Portatil' => 800,'Teclado Gaming' => 60,'Monitor' => 120,'Tarjeta Grafica' => 900];

if(array_key_exists("Monitor",$catologo)){
    echo "Monitor existe. Precio: " . $catologo["Monitor"] . "€<br>";
}

if(array_key_exists(60,$catologo)){
    echo "Si hay un articulo que cuesta 60€<br>";
}else{
    echo "No hay ningun articulo que cueste 60€<br>";
}

$nombres = array_keys($catologo);
print_r($nombres);
?>
