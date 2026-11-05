<?php
$poso = 15;
$altura = 0;
$dias = 0;
while($altura < $poso){
    $dias ++;
    $altura = $altura + 4;
    if($altura < $poso){
        $altura = $altura - 2;
    }
}
echo "<hr>" . "<br>";
echo "========== El caracol tarda $dias dias ========== <br>";

echo "<hr>"
?>