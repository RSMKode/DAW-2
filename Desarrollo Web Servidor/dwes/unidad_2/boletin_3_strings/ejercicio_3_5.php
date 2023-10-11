<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Ejercicio 3-5</title>
</head>

<body>
    <?php
    $cadena = "PHP es un lenguaje de código abierto adecuado para el desarrollo web";

    $cadena2 = str_replace("a", "*", $cadena);

    echo "La cadena \"$cadena\" modificada es:\n $cadena2.";
    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>