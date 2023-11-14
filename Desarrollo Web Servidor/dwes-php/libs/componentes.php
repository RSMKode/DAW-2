<?php

// Función para pintar un checkbox con los valores que nos pasan por un array

function pintaCheck(array $valores, string $name)
{
    foreach ($valores as $key => $valor) {
        echo '<input type="checkbox" name="' . $name . '[]" value=' . $valor . '>' . $valor;
    };
};

function pintaRadio(array $valores, string $name)
{
    foreach ($valores as $key => $valor) {
        echo '<input type="radio" name="' . $name . '" value="' . $valor . '">' . $valor . '<br>';
    };
};

function pintaSelect(array $valores, string $name)
{
    echo "<select name='$name' id='$name'>";
    foreach ($valores as $key => $valor) {
        echo "<option value='$valor'>$valor</option>";
    };
    echo "</select>";
};