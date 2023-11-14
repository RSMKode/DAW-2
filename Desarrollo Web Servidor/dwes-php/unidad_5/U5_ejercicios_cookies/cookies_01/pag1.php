<?php
require("../../../libs/utils.php");
require("../../../libs/componentes.php");

cabecera("Cookies ejercicio 1");

if (isset($_POST["enviar"])) {
    $color = strip_tags($_POST["color"]);
    setcookie("color", $color, time() + 30);
    header("Location:pag2.php");
} else {
    echo "<form action='' method='post'>";
    pintaSelect(["red", "green", "blue"], "color");
    echo "<input type='submit' name='enviar' value='Enviar'>";
    echo "</form>";
}

pie();
