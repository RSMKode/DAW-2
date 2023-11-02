<?php
include('../../../libs/utils.php');
echo cabecera();

// array donde almacenaremos el texto de los errores encontrados
$errores = [];
$nombre = "";
$edad = "";
//Compruebo si se ha pulsado el botón del formulario
if (!isset($_REQUEST['enviar'])) {

    //Sino se ha pulsado, incluyo el formulario
    include('form1.php');
} // Si se ha pulsado procesamos los datos recibidos
else {
    //Sanitizamos
    $nombre = recoge("nombre");
    $edad = recoge('edad');
    //Validamos

    //Validamos cadena campo nombre requerido, tamaño 40 caracteres
    cTexto($nombre, 'nombre', $errores, 40);

    //Validamos cadena campo edad, requerido, menor de 150
    cNum($edad, 'edad', $errores, true, 150);

    //Sino se han encontrado errores pasamos a otra página
    if (empty($errores)) {
        /**
         * Realizamos la redirección a correcto.php. Le pasamos datos por la URL (GET)
         * En correcto.php recibiremos los datos pasados por la URL y tendremos que sanitizarlos (recogerlos)
         */
        header("location:correcto1.php?nombre=$nombre&edad=$edad");
    } else {
        //Volvemos a mostrar el formulario con errores
        include('form1.php');
    }
}
?>
		  

<?php
if (isset($errores) and !empty($errores))
    print_r($errores);
echo pie();
?>