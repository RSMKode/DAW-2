
<?php
class MayorMenor {
    private int $mayor;
    private int $menor;
//SETTERS
    public function setMayor(int $may) {
        $this->mayor = $may;
        return $this;
    }

    public function setMenor(int $men) {
        $this->menor = $men;
        return $this;
    }
//GETTERS
    public function getMayor() : int {
        return $this->mayor;
    }

    public function getMenor() : int {
        return $this->menor;
    }
}

/*
Ejemplo de uso de la clase
$valor1=10;
$valor2=5;
$obj = new MayorMenor();
$obj->setMayor($valor1);
$obj->setMenor($valor2);

echo $obj->getMayor();
echo"<br>";
echo $obj->getMenor();
*/
?>
