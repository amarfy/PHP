<?php
$a = 70;
$b = 100;
$c = 10000;
if($a >= $b && $a >= $c){
        $mayor = $a;


}elseif($b >= $a && $b >= $c){
        $mayor = $b;


}else{
        $mayor = $c;

}


echo "El mayor es: $mayor\n";




?>