<?php

do{
    $pin = rand(1000, 9999);

}while($pin % 1111 == 0);
echo "========== TU PIN ES ESTE: ========== <br>";
echo "PIN: $pin"


?>