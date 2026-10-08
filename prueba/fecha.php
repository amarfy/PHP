<?php
$fecha = date("d-m-Y");

$hora = date("H:i:s");

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Reloj</title>
    </head>
    <body>
        <h2>Tu reloj actual</h2>
        <p><strong>Fecha: </strong><?= $fecha ?></p>
        <p><strong>Hora: </strong><?= $hora ?></p>
    </body>
</html>
