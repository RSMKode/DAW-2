<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejercicio 8</title>
</head>

<body>
    <?php
    $tiradas = 2;

    $numeros = array();
    echo "<h2>Animal aleatorio</h2>";
    for ($i = 0; $i < $tiradas; $i++) {
        $numeros[] = rand(1, 6);
        echo "<img src=\"./imagenes/dado/$numeros[$i].jpg\" alt=\"Cara de dado aleatoria\"/>";
    }
    $total = $numeros[0] + $numeros[1];

    switch ($total) {
        case 1:
            $animal = "burro";
            break;
        case 2:
            $animal = "cerdo";
            break;
        case 3:
            $animal = "oveja";
            break;
        case 4:
            $animal = "panda";
            break;
        case 5:
            $animal = "rana";
            break;
        case 6:
            $animal = "raton";
            break;
        case 7:
            $animal = "tigre";
            break;
        case 8:
            $animal = "vaca";
            break;
        case 9:
            $animal = "leon";
            break;
        case 10:
            $animal = "elefante";
            break;
        case 11:
            $animal = "oso";
            break;
        case 12:
            $animal = "hipopotamo";
            break;
    }
    ?>
    <img src="./imagenes/animales/<?= $animal ?>.jpg" alt="Animal aleatorio" />
    <hr />
    <p><strong><a href="./ejercicio_8.php">Volver a tirar</a></strong></p>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>