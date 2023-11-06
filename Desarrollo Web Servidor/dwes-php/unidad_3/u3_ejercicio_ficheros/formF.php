<!--IMPORTANTE
No ejecutes este fichero directamente. Se carga desde ejercicio1.php con un include
-->

<form action="" method="post" enctype="multipart/form-data">
    Nombre: <input type="text" name="nombre" value="<?= isset($nombre) ? $nombre : ""; ?>" placeholder="Introduce aquí tu nombre">
    <br>
    <?php
    echo (isset($errores['nombre'])) ? $errores['nombre'] . "<br>" : "";
    ?>
    Edad:
    <input type="text" name="edad" value="<?= isset($edad) ? $edad : ""; ?>" placeholder="Introduce aquí tu edad">
    <br>
    <?php
    echo (isset($errores['edad'])) ? $errores['edad'] . "<br>" : "";
    ?>
    Foto:
    <input type="file" name="imagen" id="imagen">
    <br>
    <?php
    echo (isset($errores['imagen'])) ? $errores['imagen'] . "<br>" : "";
    ?>
    <input type="submit" name="enviar" value="Enviar">
</form>