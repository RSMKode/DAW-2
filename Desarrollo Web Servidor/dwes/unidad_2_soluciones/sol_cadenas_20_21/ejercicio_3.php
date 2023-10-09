<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 3</title>
</head>

<body>

    <?php
    $cadena = "La bala mata la vaca";
    
    $letra = "a";
    $mensaje = "No tienes ninguna $letra";
    $cuenta = mb_substr_count(mb_strtolower($cadena), $letra);

    echo "<br />";
    if ($cuenta >= 0) {
        $mensaje = "La frase \"$cadena\" tiene $cuenta apariciones de la letra $letra";
    }
    echo $mensaje;

    ?>

</body>

</html>