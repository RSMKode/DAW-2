<?php

function cabecera($titulo = NULL)
{
    // Si no se ha introducido el titulo pongo el nombre del fichero
    $titulo = (is_null($titulo)) ? basename(__FILE__) : $titulo;

    $cabecera = '
<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>' . $titulo . '</title>
    </head>

    <body>';
    return $cabecera;
}

echo cabecera(NULL);
?>