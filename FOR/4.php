<?php

$num = 29;
$primo = $num > 1;

for($i = 2; $i < $num; $i++){
    if($num % $i == 0){
        $primo = false; break;
    }
}
echo $primo ? "$num es primo <br>": "$num no es primo<br>";



?>