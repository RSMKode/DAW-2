<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo 8</title>
</head>
<body>
<?php
$mensaje='No está autorizado a ver esta página.';
$autorizado = FALSE;
if (! $autorizado) {
    echo '<center>';
    echo '<table bgcolor="#cccccc">';
    echo '<tr>';
    echo '<td align="center">';
    echo '<font color="#ff0000" size="+2">';
    echo $mensaje;
    echo '<br>';
    echo 'Contacte con el administrador del sistema.';
    echo '</font>';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
    echo '</center>';
}
echo '<br>';
?>


<!--Otra forma de hacerlo, colocando el código HTML fuera de las instrucciones 
echo pero dentro de las llaves que componen el bloque de código de if -->
<?php
$autorizado = false;
if (! $autorizado) {
    ?>
<center>
		<table bgcolor="#cccccc">
			<tr>
				<td align="center"><font color="#ff0000" size="+2"> <?php echo $mensaje?><br> Contacte con el administrador
						del sistema.
				</font></td>
			</tr>
		</table>
	</center>
<?php
}
?>
