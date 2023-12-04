<?php
$p1 = "España";
$p2 = "espaÑa";

echo strcasecmp($p1, $p2) == 0 ? "Son iguales" : "No son iguales";

echo "<br>";

$cadena = "miau guau españa whiskas";
$c2 = explode(" ", $cadena);

var_dump($c2);
