
<?php
include ('bConecta.php');

/*
 * Es la manera de evitar la inyección SQL
 */

$usuario = $_REQUEST['usuario'];
$clave = $_REQUEST['clave'];

$consulta = "SELECT * FROM usuarios 
    WHERE usuario=:usuario
    AND clave=:clave";
$result = $db->prepare($consulta);
$result->execute(array(":usuario" => $usuario, ":clave" => $clave));

if (!$result) {
	print "<p>Error en la consulta.</p>\n";
} else {
	foreach ($result as $valor) {
		print "<p>$valor[usuario] $valor[clave]</p>\n";
	}
}

?>