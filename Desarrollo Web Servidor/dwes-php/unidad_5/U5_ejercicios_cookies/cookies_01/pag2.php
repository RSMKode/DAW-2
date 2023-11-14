<?php
require("../../../libs/utils.php");
require("../../../libs/componentes.php");

cabecera("Cookies ejercicio 1");

$color = strip_tags($_COOKIE["color"]);

echo "<p style='color:$color;'>El color es $color </p><br>";

echo "<a href='pag1.php'>Volver atrás</a>";

pie();
