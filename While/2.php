<?php

$dado = rand(1,6);

do{
    $dado = rand(1,6);
    echo "Ha salido: " . $dado . "<br>";
}while($dado != 6);

?>