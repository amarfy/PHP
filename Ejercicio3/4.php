<?php

$cantidad = 2795;
$restante = $cantidad;


echo "$cantidad euros:\n<br>";

$n500 = intdiv($restante,500);
$restante %=500;

if($n500 > 0 ) echo "$n500 billetes de 500\n<br>";


$n200 = intdiv($restante, 200);
$restante %=200;

if($n200 > 0 ) echo "$n200 billetes de 200\n<br>";


$n50 = intdiv($restante,50);
$restante %=50;

if($n50 > 0 ) echo "$n50 billetes de 50\n<br>";


$n20 = intdiv($restante,20);
$restante %=20;

if($n20 > 0 ) echo "$n20 billetes de 20\n<br>";


$n5 = intdiv($restante,5);
$restante %=5;

if($n5 > 0 ) echo "$n5 billetes de 5\n<br>";


?>