<?php
include('../../libs/utils.php');

echo cabecera();

$nombre = recoge('nombre');
$edad = recoge('edad');
$file = recoge('file');

echo "Nombre: $nombre";
echo '<br>';
echo "Edad: $edad";
echo '<br>';
//Comprobamos si lo que se ha enviado es un fichero para poderlo mostrar
echo (is_file($file)) ? "Tu foto $file se ha subido con éxito <br> <img src=\"$file\"><br>" : "";
echo '<a href="./procesaFormF.php">Volver al formualrio</a>';
echo '<br>';
echo pie();
