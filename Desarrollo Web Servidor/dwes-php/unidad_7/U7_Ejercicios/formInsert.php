<?php
if (count($errores) != 0) {
    echo "<ul>";
    echo "Hay errores en el formulario:<br>";
    foreach ($errores as $error) {
        echo "<li>";
        echo $error;
        echo "</li>";
    }
    echo "</ul>";
}

?>
<form action="" method="post">

    <label for="">Nombre</label>
    <br>
    <input type="text" name="nombre" value="<?= isset($nombre) ? $nombre : ""; ?>" placeholder="Juanjo">
    <br>

    <label for="">Puesto</label>
    <br>
    <input type="text" name="puesto" value="<?= isset($puesto) ? $puesto : ""; ?>" placeholder="Programador">
    <br>

    <label for="">Fecha Nacimiento</label>
    <br>
    <input type="date" name="fechaNacimiento">
    <br>

    <label for="">Salario</label>
    <br>
    <input type="number" name="salario" value="<?= isset($salario) ? $salario : ""; ?>" placeholder="1000">
    <br>

    <label for="">Usuario</label>
    <br>
    <input type="text" name="user" value="<?= isset($user) ? $user : ""; ?>" placeholder="miau@gmail.com">
    <br>

    <label for="">Contraseña</label>
    <br>
    <input type="password" name="pass" value="<?= isset($pass) ? $pass : ""; ?>" placeholder="********">
    <br>


    <label for="">Localidad</label>
    <br>
    <?=
    pintaSelect($arrayLocalidades, "localidad")
    ?>
    <br>

    <input type="submit" name="enviar" value="Enviar">
    <input type="reset" name="borrar" value="Borrar">
</form>