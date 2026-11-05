<?php
$par = 1;
$suma = 0;

while($par <= 100){
    if($par % 2 == 0){
        $suma = $suma + $par;
    }
    $par ++;
}
echo "La suma de pares: $suma"; 

?>