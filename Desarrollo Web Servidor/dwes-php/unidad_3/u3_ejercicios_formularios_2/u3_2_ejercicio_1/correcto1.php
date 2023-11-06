<?php
include('../../../libs/utils.php');

echo cabecera();

$nombre = recoge('nombre');
$edad = recoge('edad');

echo "Nombre: $nombre";
echo '<br>';
echo "Edad: $edad";
echo '<br>';
echo '<a href="./procesaForm1.php">Volver al formualrio</a>';
echo '<br>';
echo pie();
