<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 5</title>
</head>
<body>
<form method="POST" action="Ejercicio5.php">
LISTA DE PARES DE NÚMEROS:<br>
Introduzca el primer número <input type="text" name="numero1" size="10"><br>
Introduzca el segundo número <input type="text" name="numero2" size="10"><br>
Seleccione las operaciones:<br>
<input type="checkbox" value="suma" name="operacion[]">Suma
<input type="checkbox" value="resta" name="operacion[]">Resta
<input type="checkbox" value="producto" name="operacion[]">Producto
<input type="checkbox" value="cociente" name="operacion[]">Cociente<br>
<input type="submit" value="Enviar datos" name="enviar">
</form>
</body></html>