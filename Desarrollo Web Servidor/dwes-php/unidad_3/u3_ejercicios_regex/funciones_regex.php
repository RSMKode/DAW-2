<?php

function compCodigoPostal(string $codigoPostal): bool
{
    $regex = "/^[0-9]{5}$/";
    return preg_match($regex, $codigoPostal);
}

function compTelefono(string $telefono): bool
{
    $regex = "/^[6-9][0-9]{8}$/";
    return preg_match($regex, $telefono);
}
function compDireccion(string $dir): bool
{
    $regex = "/calle|avenida|paseo/i";
    return preg_match($regex, $dir);
}
function compUsuario(string $usuario): bool
{
    $regex = "/^[a-zñÑ][a-zñÑ0-9_]{6,22}[a-zñÑ0-9]$/i";
    return preg_match($regex, $usuario);
}
function compEmail(string $email): bool
{
    $regex = "/^[a-z][a-z0-9_\.]{2,}@[a-z]{2,}[\.][a-z]{2,}$/i";
    return preg_match($regex, $email);
}
