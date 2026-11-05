<?php
$numero = 45654;
$original = $numero;
$invertido = 0;

while ($numero > 0){
    $invertido = $invertido = 10 + $numero % 10;
    $numero = (int) ($numero / 10);
}

echo "Invertido: $invertido <br>";

if($invertido == $original){
    echo "Es Palindromo";
}else{
    echo "No es palindromo";
}




?>