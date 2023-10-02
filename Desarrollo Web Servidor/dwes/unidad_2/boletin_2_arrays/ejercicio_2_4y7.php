<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejercicio 2_4</title>
</head>

<body>
    <?php
    $tiradas = 2;

    $numeros = array();
    echo "<h2>Animal aleatorio</h2>";
    for ($i = 0; $i < $tiradas; $i++) {
        $numeros[] = rand(1, 6);
        echo "<img src=\"../boletin_1/imagenes/dado/$numeros[$i].jpg\" alt=\"Cara de dado aleatoria\"/>";
    }
    $total = $numeros[0] + $numeros[1];

    $animales = [
        ["burro", "herbivoro"],
        ["cerdo", "omniboro"],
        ["oveja", "herbivoro"],
        ["panda", "omnivoro"],
        ["rana", "reptil"],
        ["raton", "omnivoro"],
        ["tigre", "carnivoro"],
        ["vaca", "herviboro"],
        ["leon", "carnivoro"],
        ["elefante", "omnivoro?"],
        ["oso", "omnivoro"],
        ["hipopotamo", "omnivoro"]
    ];

    $animal = $animales[$total - 1][0];
    ?>
    <img src="../boletin_1/imagenes/animales/<?= $animal ?>.jpg" alt="Animal aleatorio" />
    <span><?= $animal ?> es un <?= $animales[$total - 1][1] ?>.</span>
    <hr />
    <p><strong><a href="./ejercicio_2_4y7.php">Volver a tirar</a></strong></p>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>