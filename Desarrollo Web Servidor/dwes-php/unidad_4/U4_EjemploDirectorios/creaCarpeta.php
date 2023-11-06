<?php
if (! file_exists('directorio')) {
    if (! mkdir('directorio')) {
        echo 'Fallo al crear las carpetas...';
    } else {
        echo "Carpeta creada";
    }
} else {
    echo "El fichero ya existía";
}
echo "<br>";
// Estructura de la carpeta deseada
$estructura = './nivel1/nivel2/nivel3/';

// Para crear una estructura anidada se debe especificar
// el parámetro $recursive en mkdir().
if (! file_exists($estructura)) {
    if (! mkdir($estructura, 0777, true)) {
        echo 'Fallo al crear las carpetas...';
    } else {
        echo "Carpetas creadas";
    }
} else {
    echo "El fichero ya existía";
}
?>
