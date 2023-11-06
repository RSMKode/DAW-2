<?php

function potencia($numero, $exp)
{
    if ($exp == 0)
        return 1;

    return $numero * potencia($numero, $exp - 1);
}
echo potencia(4, 3);
?>