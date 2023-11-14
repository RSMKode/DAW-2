<?php
require("../../../libs/utils.php");
require("../../../libs/componentes.php");

cabecera("Cookies ejercicio 1");

if (isset($_POST["enviar"])) {
    setcookie("miau", "miau", time() + 3600);
    echo isset($_COOKIE["miau"]) ? "El navegador soporta cookies" : "El navegador soporta cookies";
} else {
    echo "<h2>Comprobación de cookies</h2>";
    echo "<form action='' method='post'>";
    echo "Crear una cookie 
    <input type='submit' name='enviar' value='Crear'>
    </li>";

    echo "</form>";
}

pie();
