<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejercicio 4</title>
</head>

<body>
    <?php
    define("RADIO_TIERRA", 6371);
    define("DISTANCIA_SOL", 150000000);
    define("PI", 3.1416);

    $distanciaVueltaMundo = 2 * PI * RADIO_TIERRA;
    $vueltasMundoASol = DISTANCIA_SOL / $distanciaVueltaMundo;

    echo "
            <p>Distancia de una vuelta al mundo: <strong>$distanciaVueltaMundo</strong> km.</p>
            <p>Vueltas al mundo hasta el Sol: <strong>$vueltasMundoASol</strong> vueltas.</p>";
    ?>
    <p><a href='./'>Volver atrás</a></p>
</body>

</html>