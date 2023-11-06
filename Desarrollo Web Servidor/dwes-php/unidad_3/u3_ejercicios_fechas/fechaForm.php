<?php
foreach ($errores as $error) {
    echo "Error: " . $error . "<br>";
}
?>

<form action="" method="post">
    Introduce las fechas en formato: "dd-mm-aaaa".
    <br>
    Fecha inicial:
    <input type="text" name="fechaInicio" value="<?= isset($fechaInicio) ? $fechaInicio : ''; ?>" placeholder="Fecha inicial">
    <br>
    Fecha final:
    <input type="text" name="fechaFin" value="<?= isset($fechaFin) ? $fechaFin : ''; ?>" placeholder="Fecha final">
    <input type="submit" name="enviar" value="Enviar">
</form>