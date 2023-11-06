<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 2</title>
</head>
<body>
<?php
/**Realiza un función sinTildes que reciba una cadena y devuelva la misma función pero con las vocales sin tildes.*/
function sinTildes($cad){
    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù");
    $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U");
    $texto = str_replace($no_permitidas, $permitidas ,$cad);
    return $texto;
}
echo sinTildes("había un camión");
?>
</body>
</html>