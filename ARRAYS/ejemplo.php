<hr>
<?php
$notas = [5,6,7];

$notas [0] = 4;
var_dump($notas);
?>

<br>
<hr>



<?php

$notas = [5,6,7,8,9];

echo "La Cantidad de arrays que hay es:" . " ". count($notas) . "<br>";
print_r($notas);

?>
<hr>




<?php

$html['title'] ='Web PHP' . "<br>";

$html['descriptiion'] = "BLABALABABLABALBALBNAL";

echo $html['title'] . '<hr>';

?>










<?php
$colores = ['azul','rojo','amarillo'];
foreach($colores as $color){
 echo $color . '<br>'. '<hr>';
}



?>





<?php
$capitales = [
    'Aragon' => 'Zaragoza',
    'Catalañuna' => 'Barcelona',
    'Navarra' => 'Pamplona'
];

foreach($capitales as $region => $ciudad){
    echo "La capital de $region es $ciudad" . "<br>";
}

?>





















