<?php

function ejercicio_1($cadena)
{
    $regex = "/^[0-9]{5}$/";
    return preg_match($regex, $cadena);
}

function ejercicio_2($cadena)
{
    $regex = "/^(\+?34|\+{0,1}0034){0,1}[1-9][0-9]{8}$/";
    return preg_match($regex, preg_replace("/[\s-]+/", "", $cadena));
}

function ejercicio_3($cadena)
{
    $regex = "/^(calle|avenida|paseo)/i";
    return preg_match($regex, $cadena);
}

function ejercicio_4($cadena)
{
    $regex = "/^[a-zñ][a-z_1-9]{6,22}[a-z1-9]$/iu";
    return preg_match($regex, $cadena);
}

function ejercicio_5($cadena)
{
    $regex = "/^[a-zñ][a-zñ\-1-9]{2,}@[a-zñ]{2,}[\.][a-zñ]{2,}$/i";
    return preg_match($regex, $cadena) ;
}

function newRegex($cadena, $patron)
{ echo $cadena;
    echo $patron;
    return preg_match($patron, $cadena) ;
}