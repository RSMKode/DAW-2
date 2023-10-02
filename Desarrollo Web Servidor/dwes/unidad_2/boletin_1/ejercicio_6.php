<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php
    $max = 1;
    $min = 6;
    $rand1 = rand($min, $max);
    $rand2 = rand($min, $max);
    $total = $rand1 + $rand2;

    $imagen1 = "./imagenes/dado/$rand1.jpg";
    $imagen2 = "./imagenes/dado/$rand2.jpg";

    $ganador = ($rand1 > $rand2) ? "Jugador 1" : "Jugador 2";
    $ganador = ($rand1 == $rand2) ? "Empate" : $ganador;
    ?>

    <img src="<?= $imagen1 ?>" alt="Cara de dado aleatoria 1" />
    <p>Jugador 1: <strong><?= $rand1 ?></strong></p>
    <img src="<?= $imagen2 ?>" alt="Cara de dado aleatoria 2" />
    <p>Jugador 2: <strong><?= $rand2 ?></strong></p>
    <p>Ganador: <strong><?= $ganador ?></strong></p>
    <p>Suma total: <strong><?= $total ?></strong></p>
    <hr />
    <p><strong><a href="./ejercicio_6.php">Volver a tirar</a></strong></p>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>