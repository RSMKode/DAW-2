<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Ejercicio 3-6</title>
</head>

<body>
    <?php
    // Dada la cadena "ApRendEr proGraMarciÓn" transformar la cadena a minúsculas y rellenarla
    // a derecha e izquierda con una longitud de asteriscos igual a la mitad de su longitud si 
    // es par ó igual a la mitad de (su longitud más 1) si es impar. Mostrar por pantalla la cadena en
    // minúsculas y con el relleno indicado.
    $cadena =  "ApRendEr proGraMarciÓn";
    $minusculas = mb_strtolower($cadena);
    $count = mb_strlen($minusculas);
    $count1 = $count * 2;

    if ($count % 2 == 0) {
        echo str_pad($minusculas, $count1, "*", STR_PAD_BOTH);
    } else {
        echo str_pad($minusculas, $count1 + 2, "*", STR_PAD_BOTH);
    }
    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>