<!--IMPORTANTE
No ejecutes este fichero directamente. Se carga desde ejercicio2.php con un include
-->

<p>
    <?php
    foreach ($errores as $error) {
        echo "<br>Error: " . $error . "<br>";
    }
    ?>
</p>

<form action="" method="POST">
    <p>Nombre: <input TYPE="text" name="nombre" value="<?= $nombre ?>" placeholder="Introduce aquí tu nombre"></p>
    <p>
        <?php
        /*
Vamos a generar dinamicamente (pintar) tanto el grupo radiobutton como los check
utilizando sendas funciones que reciben el array con los valores.
Estas funciones están en componentes.php
*/
        pintaRadio($valoresProvincias, "provincias");
        ?>
    </p>
    <p>
        <?php

        pintaCheck($valoresAficiones, "aficiones");
        ?>
    </p>

    <input TYPE="submit" name="enviar" VALUE="Enviar">
    <input TYPE="submit" name="clear" VALUE="Limpiar">
</form>