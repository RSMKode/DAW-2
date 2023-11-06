<?php
require('../../libs/utils.php');
//De config.php leeremos $extensionesValidas, $rutaImagenes, $maxFichero.
require("../../libs/config.php");

echo cabecera("Ejercicio subida de fichero adjunto");

// array donde almacenaremos el texto de los errores encontrados
$errores = [];
$nombre = "";
$edad = "";

//Compruebo si se ha pulsado el botón del formulario
if (!isset($_REQUEST['enviar'])) {

    //Sino se ha pulsado, incluyo el formulario
    include('formF.php');
} // Si se ha pulsado procesamos los datos recibidos
else {
    //Sanitizamos
    $nombre = recoge("nombre");
    $edad = recoge('edad');
    //Validamos

    //Validamos cadena campo nombre requerido, tamaño 40 caracteres
    cTexto($nombre, 'nombre', $errores, 40, 1);

    //Validamos cadena campo edad, requerido, menor de 150
    cNum($edad, 'edad', $errores, true, 150);

    /* Comprobamos si existe $_FILES["imagen"] y ha habido un error al subirlo. Si ha habido algún error al subir no será necesario comprobar nada más.*/

    if (empty($errores)) {

        //En este caso la subida del fichero es obligatoria
        $file = cFile("imagen", $errores, $extensionesValidas, $rutaImagenes, $maxFichero);

        /*
        Realizamos la redirección a correcto.php. Le pasamos datos por la URL (GET)
        En correcto.php recibiremos los datos pasados por la URL y tendremos que sanitizarlos (recogerlos)
        */
        if (empty($errores)) {
            header("location:correctoF.php?nombre=$nombre&edad=$edad&file=$file");
        } else {
            require("formF.php");
        }
    } else {
        //Volvemos a mostrar el formulario con errores
        include('formF.php');
    }
}
?>
		  
<?php
echo pie();
?>