<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Ejercicio 3-3</title>
</head>

<body>
    <?php
    $cadena = "PHP es un lenguaje de código abierto adecuado para el desarrollo web";
    $cadena2 = "La bala mara la vaca";
    $letra = "a";

    $cuenta = mb_substr_count(mb_strtolower($cadena2), $letra);

    echo "La cadena \"$cadena2\" tiene $cuenta letras \"$letra\"";
    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>