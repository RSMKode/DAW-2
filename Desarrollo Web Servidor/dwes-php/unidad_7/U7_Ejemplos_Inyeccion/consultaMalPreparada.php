<?php
include('bGeneral.php');
include ('bConecta.php');

cabecera();

$usuario = $_REQUEST['usuario'];
$clave = $_REQUEST['clave'];
//Comprobamos que esta es una forma incorrecta de evitar la inyección SQL

$consulta = "SELECT * FROM usuarios WHERE (usuario='$usuario' AND clave='$clave')";
//$consulta = "SELECT * FROM usuario
//WHERE usuario='loquesea' AND clave='loquesea' OR '1'='1'";  // DESACONSEJADO: PHP NO DESINFECTA LOS DATOS
$result = $db->prepare($consulta);
$result->execute();

if (!$result) {
	print "<p>Error en la consulta.</p>\n";
} else {
	foreach ($result as $valor) {
		print "<p>$valor[usuario] $valor[clave]</p>\n";
	}
}

?>