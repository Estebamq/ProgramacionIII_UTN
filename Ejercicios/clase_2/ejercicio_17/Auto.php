<?php
class Auto{
    private $color;
    private $precio;
    private $marca;
    private $fecha;
    

    public function __construct($marca, $color,$precio = 0.0,$fecha = date("d-m-Y")) {
        $this->color = $color;
        $this->marca = $marca;
        $this->precio = $precio;
        $this->fecha = $fecha;

    }

    public function AgregarImpuestos($aumento)
    {
        return $this->precio + $aumento;

    }

    public static function MostrarAuto($auto){

        echo "La marca es: " . $auto->__getMarca();
    }
    
    
    public function __getMarca($marca)
    {
        return $this-> $marca;
    }



}

?>