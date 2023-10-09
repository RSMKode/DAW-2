<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php
    $max = 1;
    $min = 6;
    $rand1 = rand($min, $max);
    $rand2 = rand($min, $max);
    $imagen1 = "./imagenes/dado/$rand1.jpg";
    $imagen2 = "./imagenes/dado/$rand2.jpg";

    echo "<img src=\"$imagen1\" alt=\"Cara de dado aleatoria 1\"/>
            <img src=\"$imagen2\" alt=\"Cara de dado aleatoria 2\"/>";
    ?>
    <p><a href='./'>Volver atrás</a></p>
</body>

</html>