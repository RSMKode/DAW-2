
<?php
include('bGeneral.php');
include ('bConecta.php');

cabecera();
//No recogemos para probar el problema de la inyección cuando no filtramos os datos que vienen del ususario
$usuario = $_REQUEST['usuario'];
$clave = $_REQUEST['clave'];
/*
 * Consulta con inyección
 * Sería como poner en un formulario
 * Usuario loquesea
 * Clave loquesea' OR '1'='1
*/

$consulta = "SELECT * FROM usuarios where usuario='$usuario' and clave='$clave'";
$result=$db->query($consulta);

	if (!$result) {
	    print "<p>Error en la consulta.</p>\n";
	} else {
	    foreach ($result as $valor) {
	        print "<p>$valor[usuario] $valor[clave]</p>\n";
	    }
	}



?>
</body>