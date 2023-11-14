<?php

/*
Ejemplo que mostrará el saludo en el
idioma que se reciba en la cookie y si esta no existe la cookie lo mostrará en español
*/
$saludos = array(
    'es' => '¡Hola!',
    'en' => 'Hello!',
    'fr' => 'Bonjour!'
);
$idiomas = array(
    'es' => 'Español',
    'en' => 'Inglés',
    'fr' => 'Francés'
);
//Comprobamos si hay cookie validamos su valor y . Sino hay ponemos por defecto el saludo en español
if (isset($_COOKIE['idioma']) && array_key_exists($_COOKIE['idioma'], $saludos)) {
    $idiomaCookie = $_COOKIE['idioma'];
}else{
$idiomaCookie ="es";
}
echo $saludos[$idiomaCookie];

