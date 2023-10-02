<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php
    $max = 1;
    $min = 6;
    $rand = rand ($min, $max);
    $imagen = "./imagenes/dado/$rand.jpg";

    echo "<img src='$imagen' alt='Cara de dado aleatoria'/>
            <p>Dado $rand</p>";
    ?>
    <p><a href='./'>Volver atrás</a></p>
</body>

</html>