<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
        <title>Ejercicio 3</title>
    	<?php
        //Declaramos las variables y funciones        
    	function sinEspacios($frase) {
    	    $texto = trim(preg_replace('/ +/', ' ', $frase));
    	    return $texto;
    	}
      	?>
    </head>
    <body>
		<?php
		//Para ver la desaparición de espacios en el navegador hay que ver el html
        $prueba="   Frase con       muchos   espacios       inútiles      ";
        echo "$prueba <br>";
        echo sinEspacios($prueba);
    
		?>
    </body>
</html>
