<?php
include('../../libs/utils.php');
include('../../libs/config.php');

echo cabecera();

$archivo = fopen($rutaArchivos . DIRECTORY_SEPARATOR . "datosUsuarios.txt", "r");
while (!feof($archivo)) {
    $linea = str_replace(PHP_EOL, "", fgets($archivo));

    if ($linea != "") {
        $datos = explode(";", $linea);


        $nombre = $datos[0];
        $edad = $datos[1];
        $rutaImagen = $datos[2];
        $fechaSubida = $datos[3];

        echo "<h1>$nombre</h1>";
        echo "<h2>$edad</h2>";
        echo "<p>$fechaSubida</p>";
        echo "<img src='$rutaImagen' alt='Imagen de $nombre'>";
        echo "<hr>";
    }
}
fclose($archivo);


echo pie();
