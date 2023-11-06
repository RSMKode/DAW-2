<!--IMPORTANTE
No ejecutes este fichero directamente. Se carga desde EjemploSubidaSencillo.php con un include
-->

<?php foreach ($errores as $error) {
	echo $error . "<br>";
}
?>
<html>
<h1>Subida de ficheros</h1>
<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="imagen" id="imagen" />
	<input type="submit" name="bAceptar" value="Subir fichero" />
</form>

</html>