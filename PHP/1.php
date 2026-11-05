<?php
function convertirTemperatura(float $celsius, &$fahrenheit, &$kelvin): bool {
    $fahrenheit = $celsius * 9 / 5 + 32;
    $kelvin = $celsius + 273.15;

    return $celsius < 0;
}

$celsius = -5;

$bajocero = convertirTemperatura($celsius, $fahrenheit, $kelvin);

echo "Celsius: $celsius ºC<br>";
echo "Fahrenheit: $fahrenheit ºF<br>";
echo "Kelvin: $kelvin ºK<br>";

if ($bajocero) {
    echo "!PELIGRO Temperatura bajo cero <br>";
}
?>