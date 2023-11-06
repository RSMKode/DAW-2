<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Ejercicio 3-2</title>
</head>

<body>
    <?php
    $cadena = "PHP es un lenguaje de código abierto adecuado para el desarrollo web";

    $array_cadena = explode(" ", $cadena);
    $numero = 4;

    if (count($array_cadena) > $numero) {
        for ($i = 0; $i < $numero; $i++) {
            echo "Palabra $i: $array_cadena[$i] <br>";
        }
    } else {
        echo "Ha de tener mínimo dos palabras.";
    }

    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>