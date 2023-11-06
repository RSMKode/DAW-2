<?php
require "../../utils.php";

echo cabecera("Ejercicios Regex 1-5");
?>

<form action="./ejercicios1-5.php" method="post">
    <input type="text" name="texto" placeholder="Introduce aquí tu texto">
    <br>
    Comprobar código postal
    <input type="checkbox" name="opciones[]" value="codigoPostal">
    <br>
    Comprobar teléfono
    <input type="checkbox" name="opciones[]" value="telefono">
    <br>
    Comprobar dirección
    <input type="checkbox" name="opciones[]" value="direccion">
    <br>
    Comprobar usuario del sistema
    <input type="checkbox" name="opciones[]" value="usuario">
    <br>
    Comprobar email
    <input type="checkbox" name="opciones[]" value="email">
    <br>
    <input type="submit" name="enviar" value="Enviar">
</form>

<?php
echo pie();
?>