<!-- Inicialización y escritura array -->
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo</title>
</head>
<body>
<?php
//declaración de un array vacio. No es obligatorio hacerlo
$frutas = array();
//Equivalente a lo anterior
$frutas =["kiwi","pérsimon"];
/*Añadiendo elementos para inicializar con varios valores. Dos formas de hacerlo
 * Sino indicamos índice empieza por 0
 */
$frutas = array("melón", "sandía");
$frutas =["kiwi","pérsimon"];
$frutas[] ="naranja";
//Mostramos estructura y contenido del array
print_r ($frutas);
echo "La primera fruta de la lista es $frutas[0].<br>";
echo "La segunda fruta de la lista es $frutas[1].<br>";
//echo "La tercera fruta de la lista es $frutas[2].<br>";
$frutas[0] = "limón"; //Asigna un nuevo valor al elemento 1
//Cambiamos el primer elemento de la lista
$frutas[] = "kiwi";
echo "La primera fruta de la lista es $frutas[0].<br>";
//Contar los elementos de la lista
echo "La lista contiene " . count($frutas) . " frutas.<br>";

//Recorrido de la lista con un bucle
//Cuidado, si falta elemento genera error

for ($i = 0; $i < count($frutas); $i++) {
	echo "Elemento $i: $frutas[$i]<br>";
}
?>
</body>
</html>
