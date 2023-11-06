<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 5</title>
</head>
<body>
    <?php
    // Confiamos en que el array tiene al menos dos elementos
    $jugadores = [
        "Crovic",
        "Antic",
        "Malic",
        "Zulic",
        "Rostrich"
    ];

    $frase = "La alineación del equipo está compuesta por: $jugadores[0]";

    for ($i = 1; $i < count($jugadores) - 1; $i ++) {
        $frase = $frase . ", " . $jugadores[$i];
    }
    $frase = $frase . " y " . $jugadores[$i];
    echo $frase;

    ?>
</body>
</html>