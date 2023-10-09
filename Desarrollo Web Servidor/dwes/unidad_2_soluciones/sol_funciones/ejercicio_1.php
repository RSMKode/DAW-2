<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 1</title>
    	<?php

    // Declaramos las variables y funciones
    function capitales($pais, $capital = NULL, $num_hab = "muchos")
    {
        $capital = is_null($capital) ? "Madrid" : $capital;
        return "La capital de $pais es $capital y tiene $num_hab habitantes. <br/>";
    }
    ?>
    </head>
<body>
		<?php
echo capitales("España", "Murcia", 500000);
echo capitales("Francia", "Paris", 40232);
echo capitales("Inglaterra");
echo capitales("Alemania", NULL, 4512354);
echo capitales("Italia", "Roma");
?>
</body>
</html>
