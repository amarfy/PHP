<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hola</title>
    </head>
    <body>
        <?php
        $euro = 13;
        $cambioDivisa = 166;
        $peseta = $euro * $cambioDivisa;


        ?>

        <h2>El cambio de 13 euros a pesetas son:
        </h2>

        <p><strong>Euros: </strong><?= $euro ?></p>
        <p><strong>Pesetas: </strong><?= $peseta ?></p>
    </body>
</html>