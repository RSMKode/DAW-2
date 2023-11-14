<?php
require("../../../libs/utils.php");
require("../../../libs/componentes.php");

cabecera("Cookies ejercicio 1");

if (isset($_POST["enviar"])) {
    $valor = strip_tags($_REQUEST["enviar"]);
    switch ($valor) {
        case "Crear":
            $segundos = strip_tags($_POST['segundos']);
            setcookie("miau", "miau", time() + $segundos);
            echo "La cookie se ha creado con una duración de $segundos segundos";
            break;
        case "Comprobar":
            if (isset($_COOKIE["miau"])) {
                $valorCookie = strip_tags($_COOKIE["miau"]);
                echo "La cookie: '$valorCookie' existe";
            } else {
                echo "La cookie no existe";
            }
            break;
        case "Destruir":
            setcookie("miau", "", time() - 1);
            echo "Se ha destruído la cookie";
            break;
    }
} else {
    echo "<h2>Elige una opción</h2>";
    echo "<form action='' method='post'>";
    echo "<ul><li>Crear una cookie con una duración de 
    <input type='number' min='1' max='60' name='segundos'>
    segundos (entre 1 y 60)
    <input type='submit' name='enviar' value='Crear'>
    </li>";
    echo "<li>Comprobar la cookie
    <input type='submit' name='enviar' value='Comprobar'>
    </li>";
    echo "<li>Destruir la cookie
    <input type='submit' name='enviar' value='Destruir'>
    </li>";
    echo "</form></ul>";
}

pie();
