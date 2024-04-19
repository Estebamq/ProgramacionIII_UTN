<?php

require_once "./Usuario_ejemplo.php";


class Empleado extends Usuario{

    public  $edad;

    public function __construct($nombre, $apellido , $edad = 0) {
        parent::__construct($nombre,$apellido);

        $this->edad = $edad;
    }

    public static function MostrarEstatico($empleado){
        return $empleado -> Mostrar() . " y su edad es: " . $empleado ->edad; 
    
    }


}



?>