<?php

const FORMATOS = ["dd-mm-aaaa", "aaaa-mm-dd"];

function cFecha(string $fecha, string $campo, array &$errores, string $formato)
{
    if (comprobarFecha($fecha, $formato)) {
        return true;
    }
    $errores[$campo] = "Error en el formato de fecha en el campo $campo";
    return false;
}

function comprobarFecha(string $fecha, $formato)
{

    $fechaArray = explode("-", $fecha);

    if ($formato === FORMATOS[0]) {
        $d = $fechaArray[0];
        $m = $fechaArray[1];
        $y = $fechaArray[2];
    } else if ($formato === FORMATOS[1]) {
        $d = $fechaArray[2];
        $m = $fechaArray[1];
        $y = $fechaArray[0];
    } else return false;

    return checkdate($m, $d, $y);
}

function fechaAUnix(string $fecha, $formato): int | false
{

    if (comprobarFecha($fecha, $formato)) {
        return strtotime($fecha);
    } else return false;
}

function unixAFecha(int $unix, string $formato): string | false
{
    if ($formato === FORMATOS[0]) {
        return date("d-m-Y", $unix);
    } else if ($formato === FORMATOS[1]) {
        return date("Y-m-d", $unix);
    } else return false;
}

function dias_entre_fechas($fecha_inicio, $fecha_fin, $formato): int
{
    $formatos = ["dd-mm-aaaa", "aaaa-mm-dd"];

    $unix_inicio = fechaAUnix($fecha_inicio, $formato);
    $unix_fin = fechaAUnix($fecha_fin, $formato);


    $dias = ($unix_fin - $unix_inicio) / (60 * 60 * 24);
    return $dias;
}
