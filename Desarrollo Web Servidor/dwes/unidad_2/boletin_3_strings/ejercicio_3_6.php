<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Ejercicio 3-6</title>
</head>

<body>
    <?php
    $cadena = "PHP es un lenguaje de código abierto adecuado para el desarrollo web";

    $partes = explode(" ", $cadena);
    $partes = explode(" ", $cadena);

    foreach ($partes as $palabra) {
        echo $palabra . "<br>";
    }
    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>