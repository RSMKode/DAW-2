<?php

class MiExcepcion extends Exception {
    public function __construct($msj, $codigo = 0, Exception $previa = null) {
        // código propio
        parent::__construct($msj, $codigo, $previa);
    }
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
    public function miFuncion() {
        echo "Una función personalizada para este tipo de excepción\n";
    }
}

//Ejemplo de uso de mi nueva clase de excepción
try {
    if (true) {
        throw new MiExcepcion("Esta es mi nueva clase de excepción.");
    }
    
} catch (MiExcepcion $me) {
    echo "Mensaje: ".$me->getMessage();
    echo"<br>";
    echo $me;
}

?>