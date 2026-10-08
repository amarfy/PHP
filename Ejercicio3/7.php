<?php

 $nota_media = 9.99;
 $ingresos = 0 ;
 $aprodadas = true;
 $discapacidad = true;

 $opcionA = $nota_media >= 9;
 $ingresos < 1000000 && $aprodadas;


 $opcionb = $nota_media >=9.5 && $aprodadas;


 $opcionc = $discapacidad && $nota_media >=7;

 if($opcionA || $opcionb || $opcionc){
    echo "El alumno si tiene derecho a beca<br>";
    
 }else{
    echo "el alumno no tiene derecho a beca";
 }

?>