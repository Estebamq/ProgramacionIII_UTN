<?php

class Usuario {
    public $nombre;
    public $apellido;

    public function __construct($nombre, $apellido){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;

    }

    public function Mostrar(){
        return "Su nombre es: " . $this->nombre. " y su apellido es: " . $this->apellido;
    }


    
}



?>