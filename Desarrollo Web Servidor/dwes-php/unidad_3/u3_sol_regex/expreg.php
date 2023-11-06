<?php
include ("utils.php");
if (isset($_POST['expreg'])) {
    $cadena = $_POST['cadena'];
    $expreg = $_POST['expreg'];
    

    switch ($expreg) {
        case '1':
            $resultado = ejercicio_1($cadena);
            break;
        case '2':
            $resultado = ejercicio_2($cadena);
            break;
        case '3':
            $resultado = ejercicio_3($cadena);
            break;
        case '4':
            $resultado = ejercicio_4($cadena);
            break;
        case '5':
            $resultado = ejercicio_5($cadena);
            break;
        case '6':
            $patron = $_POST['patron'];
            $resultado = newRegex($cadena, $patron);
    }

    echo $resultado ? "La cadena es correcta" : "La cadena no es correcta";
}