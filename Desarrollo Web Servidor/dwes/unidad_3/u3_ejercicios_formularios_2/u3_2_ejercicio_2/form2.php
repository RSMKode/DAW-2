<!--IMPORTANTE
No ejecutes este fichero directamente. Se carga desde ejercicio1.php con un include
-->

<form action="" method="post">
    Nombre: <input type="text" name="nombre" value="<?= isset($nombre) ? $nombre : ""; ?>" placeholder="Introduce aquí tu nombre">
    <br>
    <?php
    echo (isset($errores['nombre'])) ? $errores['nombre'] . "<br>" : "";
    ?>
    1 dado
    <input type="radio" name="dados" value="1">
    2 dados
    <input type="radio" name="dados" value="2">
    3 dados
    <input type="radio" name="dados" value="3">
    <br>
    <?php
    echo (isset($errores['dados'])) ? $errores['dados'] . "<br>" : "";
    ?>
    Quiero mostrar imágenes <input type="checkbox" name="imagenes" value="on">
    <br>
    <input type="submit" name="enviar" value="Enviar">
    <input TYPE="reset" name="clear" VALUE="Reset">
</form>