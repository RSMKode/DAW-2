<?php

/*
Ejemplo que crea una cookie según el idioma elegido. 
Pasa a otra página saludo.php donde se mostrará el saludo en el
idioma que se haya guardado en la cookie y si esta no existe lo mostrará en español
*/
include ("bGeneral.php");
// Lista de idiomas con sus valores y etiquetas
$idiomas = array(
    'es' => 'Español',
    'en' => 'Inglés',
    'fr' => 'Francés'
);




$errores=array();
if (!isset($_REQUEST['bAceptar'])) {
    include("formCookie_3.php");
}else{
      // Validación del campo "Idioma"
    $idiomaSeleccionado = recoge("idioma");
    // Validamos que el idioma seleccionado esté en la lista
        if (!array_key_exists($idiomaSeleccionado, $idiomas)) {
            
           $errores[]="Idioma no valido";
        }
   

    // Si no hay errores de validación, puedes establecer la cookie
    if (empty($errores)) {
        setcookie("idioma",$idiomaSeleccionado,time()+3600);
        header("location:saludo.php");
    }else {
        include("formCookie_3.php");
    }
}

?>
</body>
</html>
