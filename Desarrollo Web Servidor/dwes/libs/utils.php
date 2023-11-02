<?php

/**
 * Librería con funciones generales y de validación
 * @author Roger Sancho
 * 
 */

//Crea la cabecera del html con el título indicado
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


// Crea el cierre del html
function pie(): string
{
    return '        
                    <p><a href="./">Volver atrás</a></p>
                </body>
            </html>
        ';
}

/**
 * funcion sinTildes
 *
 * Elimina caracteres con tilde de las cadenas
 * 
 * @param string $frase
 * @return string
 */
function sinTildes($frase)
{
    $no_permitidas = array(
        "á",
        "é",
        "í",
        "ó",
        "ú",
        "Á",
        "É",
        "Í",
        "Ó",
        "Ú",
        "à",
        "è",
        "ì",
        "ò",
        "ù",
        "À",
        "È",
        "Ì",
        "Ò",
        "Ù"
    );
    $permitidas = array(
        "a",
        "e",
        "i",
        "o",
        "u",
        "A",
        "E",
        "I",
        "O",
        "U",
        "a",
        "e",
        "i",
        "o",
        "u",
        "A",
        "E",
        "I",
        "O",
        "U"
    );
    $texto = str_replace($no_permitidas, $permitidas, $frase);
    return $texto;
}

/**
 * Funcion sinEspacios
 * 
 * Elimina los espacios de una cadena de texto
 * 
 * @param string $frase
 * @param string $espacio
 * @return string
 */
function sinEspacios(string $cadena): string
{
    $texto = trim(preg_replace('/ +/', " ", $cadena));
    return $texto;
}

//Compara dos cadenas ignorando mayúsculas y minúsculas y sin tildes ni espacios utilizando las funciones anteriores.
function compCaseEsp(string $cadena1, string $cadena2): int
{
    $newCadena1 = sinTildes(sinEspacios($cadena1));
    $newCadena2 = sinTildes(sinEspacios($cadena2));

    return strcasecmp($newCadena1, $newCadena2);
}

/**
 * Funcion recoge
 * 
 * Sanitiza cadenas de texto
 * 
 * @param string $var
 * @return string
 */
function recoge(string $var): string
{
    if (isset($_REQUEST[$var]) && (!is_array($_REQUEST[$var]))) {
        $tmp = sinEspacios($_REQUEST[$var]);
        $tmp = strip_tags($tmp);
    } else
        $tmp = "";

    return $tmp;
}

/**
 * Funcion recogeArray
 * 
 * Sanitiza arrays
 * 
 * @param string $var
 * @return array
 */

function recogeArray(string $var): array
{
    $array = [];
    if (isset($_REQUEST[$var]) && (is_array($_REQUEST[$var]))) {
        foreach ($_REQUEST[$var] as $valor)
            $array[] = strip_tags(sinEspacios($valor));
    }

    return $array;
}


//Funciones de validación

/**
 * Funcion cTexto
 *
 * Valida una cadena de texto con respecto a una RegEx. Reporta error en un array.
 * Le pasamos cadena, nombre de campo y array de errores y 
 * de manera voluntaria mínimo y máximo de caracteres (si = sería campo no requerido) , 
 * si permitimos o no espacios en nuestra cadena y si la cadena es o no sensible a mayúsculas
 * 
 * @param string $text
 * @param string $campo
 * @param array $errores
 * @param integer $min
 * @param integer $max
 * @param bool $espacios
 * @param bool $case
 * @return bool
 *
 */
function cTexto(string $text, string $campo, array &$errores, int $max = 30, int $min = 1, bool $espacios = TRUE, bool $case = TRUE)
{
    $case = ($case === TRUE) ? "i" : "";
    $espacios = ($espacios === TRUE) ? " " : "";
    if ((preg_match("/^[a-zñ$espacios]{" . $min . "," . $max . "}$/u$case", sinTildes($text)))) {
        return true;
    }
    $errores[$campo] = "Error en el campo $campo";
    return false;
}

/**
 * Funcion cNum
 *
 * Valida que un string sea numerico menor o igual que un número y si es o no requerido
 * 
 * @param string $text
 * @param string $campo
 * @param array $errores
 * @param bool $requerido
 * @param integer $max
 * @return bool
 */
function cNum(string $num, string $campo, array &$errores, bool $requerido = TRUE, int $max = PHP_INT_MAX)
{
    $cuantificador = ($requerido) ? "+" : "*";
    if ((preg_match("/^[0-9]" . $cuantificador . "$/", $num)) && ($num <= $max)) {

        return true;
    }
    $errores[$campo] = "Error en el campo $campo";
    return false;
}

/**
 * Funcion cRadio
 *
 * Valida que un string se encuentre entre los valores posibles. Si es requerido o no
 * 
 * @param string $text
 * @param string $campo
 * @param array $errores
 * @param array $valores
 * @param bool $requerido
 * 
 * @return boolean
 */
function cRadio(string $text, string $campo, array &$errores, array $valores, bool $requerido = TRUE)
{
    if (!$requerido && $text == "") {
        return true;
    }
    if (in_array($text, $valores)) {
        return true;
    }

    $errores[$campo] = "Error en el campo $campo";
    return false;
}

/**
 * Funcion cCheck
 *
 * Valida que los valores seleccionado en un checkbox array están dentro de los 
 * valores válidos dados en un array. Si es requerido o no
 * 
 * @param array $text
 * @param string $campo
 * @param array $errores
 * @param array $valores
 * @param bool $requerido
 * 
 * @return boolean
 */

function cCheck(array $arr, string $campo, array &$errores, array $valores, bool $requerido = TRUE)
{

    if (($requerido) && (count($arr) == 0)) {
        $errores[$campo] = "Error en el campo $campo";
        return false;
    }
    foreach ($arr as $valor) {
        if (!in_array($valor, $valores)) {
            $errores[$campo] = "Error en el campo $campo, no existe el valor: $valor";
            return false;
        }
    }
    return true;
}
