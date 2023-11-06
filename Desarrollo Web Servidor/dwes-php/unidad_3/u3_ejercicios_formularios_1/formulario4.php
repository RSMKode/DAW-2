<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3_1_4</title>
</head>

<body>
    <p>Tabla de multiplicar:</p>
    <form action="ejercicio4.php" method="POST">
        Introduzca el primer número
        <input type="text" name="numero1">
        Introduzca el segundo número
        <input type="text" name="numero2">
        <br>
        Seleccione la operación:
        <input type="checkbox" value="suma" name="operacion[]">Suma
        <input type="checkbox" value="resta" name="operacion[]">Resta
        <input type="checkbox" value="producto" name="operacion[]">Producto
        <input type="checkbox" value="cociente" name="operacion[]">Cociente
        <input type="submit" value="Envíar datos" name="enviar">
    </form>
    <p><a href="./">Volver atrás</a></p>
</body>

</html>