<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 2</title>
</head>
<body>
<?php
$animales = array(

    "burro" => array(
        "grupo" => "hervivoro",
        "especie" => "mamifero"
    ),
    "cerdo" => array(
        "grupo" => "omnivoro",
        "especie" => "mamifero"
    ),
    "oveja" => array(
        "grupo" => "hervivoro",
        "especie" => "mamifero"
    ),
    "rana" => array(
        "grupo" => "insectivoro",
        "especie" => "mamifero"
    ),
    "raton" => array(
        "grupo" => "omnivoro",
        "especie" => "mamifero"
    ),
    "tigre" => array(
        "grupo" => "carnivoro",
        "especie" => "mamifero"
    ),
    "vaca" => array(
        "grupo" => "hervivoro",
        "especie" => "mamifero"
    ),
    "leon" => array(
        "grupo" => "carnivoro",
        "especie" => "mamifero"
    ),
    "elefante" => array(
        "grupo" => "hervivoro",
        "especie" => "mamifero"
    ),
    "oso" => array(
        "grupo" => "omnivoro",
        "especie" => "mamifero"
    ),
    "hipopotamo" => array(
        "grupo" => "hervivoro",
        "especie" => "mamifero"
    )
);

// array_rand devuelve un key al azar
$animal = array_rand($animales, 1);
echo $animal;
echo "<br>";

foreach ($animales[$animal] as $key => $val) {
    echo "<br> $key : $val <br>";
}

?>
</body>
</html>