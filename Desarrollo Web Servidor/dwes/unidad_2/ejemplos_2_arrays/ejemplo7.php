<!--Ejemplo de array bidimensional asociativo .-->

<?php

$array =[
    'Luis' =>[
       'piso' => 5,
        'escalera' => 'A',
        'puerta' => 15
    ],
    'Ana' => [
        'piso' => 2,
        'escalera' => 'A',
        'puerta' => 5
    ],
    ' Juan' => [
        'piso' => 3,
        'escalera' => 'B',
        'puerta' => 10
    ]
];
/*
 * También podemos declararlo así
 $array = array(
    'Luis' => array(
        'piso' => 5,
        'escalera' => 'A',
        'puerta' => 15
    ),
    'Ana' =>array(
        'piso' => 2,
        'escalera' => 'A',
        'puerta' => 5
    ),
    ' Juan' => array(
        'piso' => 3,
        'escalera' => 'B',
        'puerta' => 10
    )
);
 */
echo "<pre>";
echo print_r($array);
// Mostramos contenido del array mul tidimensional con la clave asociada a cada dimensión y los valores de sus elementos
foreach ($array as $inquilino => $datos) {
    echo "<p>Inquilino: $inquilino<br>";
    foreach ($datos as $dato => $valor) {
        echo "$dato: $valor<br>";
    }
    echo "</p>";
}
?>