<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 4</title>
</head>
<body>
<?php
$lenguajes=array(
    "lenguaje servidor" => array("PHP", "Perl"),
    "Lenguaje cliente" =>array("Java", "Visual")
);

//Mostramos con print_r la estructura creada (valido para desarrollo)
echo "<pre>";
print_r($lenguajes);
echo "</pre>";
foreach ($lenguajes as $valor){
   print_r($valor);
    echo "<br>";
}

?>
</body>
</html>