
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo 2</title>
</head>
<body>
	<p> 
<?php
// asignamos valor a la constante
define("PI", 3.1416);
// No se pone el símbolo dolar
echo "El valor de PI es : " . PI . "<br>";
// diferencia variables en mayúsculas y ninúsculas
$precio = 33;
$Precio = 55;
echo "La variable precio contiene el valor:  ";
/*
 * En PHP las variables se representan con un signo de dólar seguido por el nombre de la variable.
 * El nombre de la variable es sensible a minúsculas y mayúsculas.
 * Los nombres de variables siguen las mismas reglas que otras etiquetas en PHP.
 * Un nombre de variable válido tiene que empezar con una letra o un carácter de subrayado.
 */
echo $precio;
echo "<br>";
echo "La variable Precio contiene el valor: ";
// concatenación cadenas con el signo .
echo $Precio . "<br>";
$suma = $precio + $Precio;
echo "El resultado de sumar precio y Precio es:" . $suma . "<br>";
// Si queremos que se realice la operación debemos sacarla de las " y mantener el (
echo "El resultado de sumar precio y Precio es:" . ($precio + $Precio ). "<br>"?> 
    </p>
</body>
</html>
