<?php
include('../../../libs/utils.php');
echo cabecera();

// array donde almacenaremos el texto de los errores encontrados
$errores = [];
$nombre = "";
$dados = "";
//Valores que puede tener el radio
$valoresDados = [1, 2, 3];
$imagenes = "";
//Compruebo si se ha pulsado el botón del formulario
if (!isset($_REQUEST['enviar'])) {

    //Sino se ha pulsado, incluyo el formulario
    require('form2.php');
} // Si se ha pulsado procesamos los datos recibidos
else {
    //Sanitizamos
    /* Recogemos todos los campos incluso el radiobutton.
    En el caso del control radio nos servirá también para poner a "" cuando el usuario no
    haya seleccionado ninguna opción del radiobutton.
    */
    $nombre = recoge("nombre");
    $dados = recoge('dados');
    $imagenes = recoge('imagenes');

    //Valido check. Si se ha seleccionado (he recibido on) lo pongo a TRUE, a FALSE en caso contrario
    $imagenes = $imagenes == "on" ? true : false;

    //Valido el campo radiobutton. Los valores pueden ser los que tengo en el array $valores
    cRadio($dados, 'dados', $errores, $valoresDados);

    //Validamos cadena campo nombre requerido, tamaño 40 caracteres
    cTexto($nombre, 'nombre', $errores, 40);

    //Sino se han encontrado errores pasamos a otra página
    if (!empty($errores)) {
        require("form2.php");
    } else {
        /* En caso de que no haya errores podemos hacer dos cosas:
            - Realizar aqui el juego y mostrar el formulario para
             poder volver a jugar (es lo hecho en esta solución)
             - Pasar a correcto.php pasándole los datos por URL y realizar alli el juego. 
             En ese caso podríamos poner un enlace a "ejercicio2.php" para permitir volver a jugar
        */
        require("form2.php");
        for ($i = 1; $i <= $dados; $i++) {
            $dadosUsuario[] = rand(1, 6);
            $dadosMaquina[] = rand(1, 6);
        }

        //Si se ha seleccionado mostrar imágenes las mostramos sino mostraremos el valor
        if ($imagenes) {
            echo "<h3>Dados del usuario: $nombre</h3>";
            foreach ($dadosUsuario as $valor) {
                echo "<img src='img/dado/" . $valor . ".jpg' alt='dado'>";
            }
            echo "<h3>Dados de la máquina</h3>";
            foreach ($dadosMaquina as $valor) {
                echo "<img src='img/dado/" . $valor . ".jpg' alt='dado'>";
            }
        }
        $totalUsuario = array_sum($dadosUsuario);
        $totalMaquina = array_sum($dadosMaquina);
        echo "<br>";

        /*
        Comparamos los dados de usuario y máquina con el operador espacial, nos devuelve 0,1 ó -1 según
        el resultado de la comparación
        */
        $resultado = $totalUsuario <=> $totalMaquina;
        switch ($resultado) {
            case 0:
                echo "Empate <br>";
                break;
            case 1:
                echo "Ganaste!!!<br>";
                break;
            case -1:
                echo "Ganó la máquina!!<br>";
                break;
        }
    }
}
?>
		  
<?php
if (isset($errores) and !empty($errores))
    print_r($errores);
echo pie();
?>