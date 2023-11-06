<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 2</title>
</head>
<body>
    <?php
    $caras = [
        "Uno",
        "Dos",
        "Tres",
        "Cuatro",
        "Cinco",
        "Seis"
    ];
    echo "<br><br>Dado número " . $caras[rand(0, 5)];
    ?>
</body>
</html>
