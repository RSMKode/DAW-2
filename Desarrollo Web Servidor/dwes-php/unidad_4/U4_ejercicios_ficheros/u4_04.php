<?php
require("../../libs/utils.php");

echo cabecera("U4 Ficheros 02");

function jugarDados (){
$tiradas = 2;

$jugador1 = array();
echo "<h2>Jugador 1</h2>";
for ($i = 0; $i < $tiradas; $i++) {
    $jugador1[] = rand(1, 6);
    echo "<img src=\"./imagenes/dado/$jugador1[$i].jpg\" alt=\"Cara de dado aleatoria\"/>";
}
$total1 = $jugador1[0] + $jugador1[1];
$pareja1 = $jugador1[0] == $jugador1[1];

$jugador2 = array();
echo "<h2>Jugador 2</h2>";
for ($i = 0; $i < $tiradas; $i++) {
    $jugador2[] = rand(1, 6);
    echo "<img src=\"./imagenes/dado/$jugador2[$i].jpg\" alt=\"Cara de dado aleatoria\"/>";
}
$total2 = $jugador2[0] + $jugador2[1];
$pareja2 = $jugador2[0] == $jugador2[1];

if ($pareja1 && $pareja2) {
    $ganador = $total1 > $total2 ? "Jugador 1" : "Jugador 2";
} else if ($pareja1) {
    $ganador = "Jugador 1";
} else if ($pareja2) {
    $ganador = "Jugador 2";
} else {
    $ganador = $total1 > $total2 ? "Jugador 1" : "Jugador 2";
}


return "<p>Ganador: <strong><?= $ganador ?></strong></p>
<hr />
<p><strong><a href=\"./u4_04.php\">Volver a tirar</a></strong></p>";

echo pie();
