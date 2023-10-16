
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Expresiones regulares</title>
</head>

<body>
<form action="expreg.php" method="POST">
<h2>Cadena</h2>
<input type="text" id="" name="cadena">
<br />
<br />
<select name="expreg" id="">
<option value="1">Ejercicio 1 Código Postal</option>
<option value="2">Ejercicio 2 Teléfono</option>
<option value="3">Ejercicio 3 Calle...</option>
<option value="4">Ejercicio 4 Usuario</option>
<option value="5">Ejercicio 5 Email</option>
<option value="6">Introduce un patron</option>

</select>
<br />
<br />
Patron en caso de elegir esa opción;
<br />
<input type="text" id="" name="patron">
<br />
<br />
<input type="submit" name= "bEnviar" value="Comprobar">
</form>
</body>

</html>