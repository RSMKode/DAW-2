<?php
require "../../utils.php";
require "./funciones_regex.php";

echo cabecera();

if (isset($_POST['enviar'])) {
    if ($_POST['texto'] == "") {
        echo "El campo texto no puede estar vacio<br>";
    } else {
        $texto = $_POST['texto'];
        echo "Texto introducido: <strong>$texto</strong><br><br>";

        if (isset($_POST['opciones'])) {
            $opciones = $_POST['opciones'];
            foreach ($opciones as $opcion) {

                switch ($opcion) {
                    case 'codigoPostal':
                        echo compCodigoPostal($texto)
                            ? "<strong>Es un código postal válido</strong>"
                            : "No es un código postal válido";
                        break;
                    case 'telefono':
                        echo compTelefono($texto)
                            ? "<strong>Es un teléfono válido</strong>"
                            : "No es un teléfono válido";
                        break;
                    case 'direccion':
                        echo compDireccion($texto)
                            ? "<strong>Es una dirección válida</strong>"
                            : "No es una dirección válida";
                        break;
                    case 'usuario':
                        echo compUsuario($texto)
                            ? "<strong>Es un usuario válido</strong>"
                            : "No es un usuario válido";
                        break;
                    case 'email':
                        echo compEmail($texto)
                            ? "<strong>Es un email válido</strong>"
                            : "No es un email válidemailo";
                        break;
                }
                echo '<br>';
            }
        } else {
            echo 'No has seleccionado ninguna opción<br>';
        }
    }
} else {
    header('location:formulario1-5.php');
}
echo "<br><a href='./formulario1-5.php'>Volver al formulario</a>";
echo pie();
