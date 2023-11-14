<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de selección de idioma con saludo</title>
</head>
<body>
   
    <?php
     //Mostramos errores si los ha habido
    foreach ($errores as $error) {
                echo $error;
            }
    ?>
    <h2>Selecciona tu idioma preferido</h2>
    <form method="post" action="">
        <label for="idioma">Idioma:</label>
       
            <?php
            // Generar dinámicamente las opciones del select
            pintaRadio($idiomas,"idioma");
            
            ?>
        </select>
        
        <input type="submit" name="bAceptar" value="Guardar Idioma">
    </form>
</html>