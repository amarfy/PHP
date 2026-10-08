<?php
$semaforo = "naranja";

switch($semaforo){
    case "verde": 
        echo "puedes pasar";
    break;

    case "naranja":
        echo "Ve parando";
        break;
    
    case "Rojo":
        echo "No cruces";
        break;

    default : echo "Color incorrecto ";

}

?>
