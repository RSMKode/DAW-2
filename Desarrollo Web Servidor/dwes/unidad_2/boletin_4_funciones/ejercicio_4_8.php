<?php

function cabecera(string $titulo = NULL, string $archivo_css = NULL): string
{
    $titulo = (is_null($titulo))
        ? basename(__FILE__)
        : $titulo;
    $cabecera_css = (is_null($archivo_css))
        ? ''
        : '<link rel="stylesheet" type="text/css" href="' . $archivo_css . '">';

    $cabecera = '
            <!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial scale=1.0">
                    ' . $cabecera_css . '
                    <title>' . $titulo . '</title>
                </head>
                <body>
        ';
    return $cabecera;
}

function pie(): string
{
    return '        
                    <p><a href="./">Volver atrás</a></p>
                </body>
            </html>
        ';
}
