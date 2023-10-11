<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Ejercicio 3-4</title>
</head>

<body>
    <?php
    $cadena = "PHP es un lenguaje de código abierto adecuado para el desarrollo web";

    $cuenta_a = mb_substr_count(mb_strtolower($cadena), "a");
    $cuenta_e = mb_substr_count(mb_strtolower($cadena), "e");
    $cuenta_i = mb_substr_count(mb_strtolower($cadena), "i");
    $cuenta_o = mb_substr_count(mb_strtolower($cadena), "o");
    $cuenta_u = mb_substr_count(mb_strtolower($cadena), "u");


    echo "La cadena \"$cadena\" tiene $cuenta_a letras \"a\", $cuenta_e letras \"e\", $cuenta_i letras \"i\", $cuenta_o letras \"o\" y $cuenta_u  letras \"u\".";
    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>