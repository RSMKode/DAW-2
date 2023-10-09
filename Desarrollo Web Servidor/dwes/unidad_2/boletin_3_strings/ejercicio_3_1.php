<html>

<head>
    <title>Ejercicios</title>
</head>

<body>
    <h1>Ejercicio 3-1</h1>

    <?php
    
    $cadena1 = "Hola";
    $cadena2 = "hola";

    echo "Comparar cadenas $cadena1 y $cadena2:";
    echo "<br>";
    echo strcmp($cadena1, $cadena2);
    echo "<br>";
    
    echo "Comparar cadenas $cadena1 y $cadena2 pero insensible a mayusculas:";
    echo "<br>";
    echo strcasecmp($cadena1, $cadena2);
    echo "<br>";
    
    ?>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>