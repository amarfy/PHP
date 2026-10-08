<?php
$edad = null;

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $edad = $_POST['Edad_usuario'];
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Numero Recluso</title>
    </head>
    <body>
        <h2>Datos del recluso</h2>
        <form action="holamundo.php" method="$_POST"><br><br>
            <label for="edad">Introduce el id</label><br><br>
            <input type="number" id="edad" name="edad_usuario" placeholder="559" required><br><br>
            <button type="submit">Verificar</button><br><br>
        </form>
    </body>
</html>