<?php 
//En este ejemplo calculamos la fecha de dentro de dos meses   
    
//Obtenemos un array con datos sobre la fecha actual, por eso no le pasamos segundo argumento
$hoy = getdate();
//Con mktime obtenemos la fecha UNIX pudiendo incrementar o decrementar en cada parte de la fecha
    $dos_meses_mas_tarde = mktime(12, 0, 0, $hoy['mon']+2, $hoy['mday'], $hoy['year']);

//Mostramos la fecha de dos meses más tarde en formato d/m/y
    echo (date ("d-m-y", $dos_meses_mas_tarde));


?>
