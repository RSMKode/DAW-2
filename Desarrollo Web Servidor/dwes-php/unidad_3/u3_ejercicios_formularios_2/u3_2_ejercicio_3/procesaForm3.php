<?php
include('../../../libs/utils.php');
include('../../../libs/componentes.php');
echo cabecera();

// array donde almacenaremos el texto de los errores encontrados
$errores = [];
$nombre = "";

$valoresProvincias = ["Valencia", "Alicante", "Castellón"];
$valoresAficiones = ["Cine", "Deporte", "Viajar", "Cómics", "Vidoejuegos"];

$premium = "";
//Compruebo si se ha pulsado el botón del formulario
if (!isset($_REQUEST['enviar'])) {

    //Sino se ha pulsado, incluyo el formulario
    require('form3.php');
} // Si se ha pulsado procesamos los datos recibidos
else {
    //Sanitizamos
    /* Recogemos todos los campos incluso el radiobutton.
    En el caso del control radio nos servirá también para poner a "" cuando el usuario no
    haya seleccionado ninguna opción del radiobutton.
    */
    $nombre = recoge("nombre");
    $provincia = recoge('provincias');
    $aficiones = recogeArray('aficiones');

    cTexto($nombre, 'nombre', $errores, 40);
    cRadio($provincia, 'provincia', $errores, $valoresProvincias);
    cCheck($aficiones, 'aficiones', $errores, $valoresAficiones);

    //Sino se han encontrado errores pasamos a otra página
    if (!empty($errores)) {
        require("form3.php");
    } else {
        //Serializanos (convertimos a string)el array para poder pasarlo por la URL
        $serializeAficiones = serialize($aficiones);
        header("location:correcto3.php?nombre=$nombre&provincia=$provincia&aficiones=$serializeAficiones");
    }
}
?>
		  
<?php
if (isset($errores) and !empty($errores))
    print_r($errores);
echo pie();
?>