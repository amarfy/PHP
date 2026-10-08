<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $edad = $_POST['edad_usuario'];

    if ($edad >= 18) {
        header("Location: https://www.grupolanavarra.com/productos/pacharan/");
        exit();

    } else {
        header("Location: https://www.etsy.com/es/listing/4361115200/poster-del-equipo-de-cachorros?gpla=1&gao=1&&utm_source=google&utm_medium=cpc&utm_campaign=shopping_es_sp_es_-art_and_collectibles&utm_custom1=_k_Cj0KCQjwlNPVBhCMARIsAPZ5Rqiy6FoUVPOvsH-eRaMONB2jEQFX2NEJoB14PTYDgZ4cLBCLiIuSy9MaAgY5EALw_wcB_k_&utm_content=go_21055077575_171879651527_715362528706_pla-314954651933_c__4361115200eses_432415314&utm_custom2=21055077575&gad_source=1&gad_campaignid=21055077575&gbraid=0AAAAADutTMfvM12nhtYsaChuEdTwzJUQb&gclid=Cj0KCQjwlNPVBhCMARIsAPZ5Rqiy6FoUVPOvsH-eRaMONB2jEQFX2NEJoB14PTYDgZ4cLBCLiIuSy9MaAgY5EALw_wcB");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Disco</title>
</head>

<body>

    <h1>Centro de control</h1>

    <form action="disco.php" method="POST">

        <label for="edad">Introduce tu edad</label><br><br>

        <input type="number" id="edad" name="edad_usuario" required min="1"><br><br>

        <button type="submit">Verifica tu edad</button>

    </form>

</body>
</html>