<?php
class MiClase {
    private $var1;
    public function __construct($param) {
        $this->var1 = $param;
    }
}

class MiSubclase extends MiClase {
    private $var2;
    public function __construct($param1, $param2) {
        $this->var2 = $param2;
        // Llamada a un método de la superclase
        parent::__construct($param1);   
    }
}
?>

