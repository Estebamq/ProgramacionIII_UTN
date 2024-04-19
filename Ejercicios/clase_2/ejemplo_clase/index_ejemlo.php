<?php
require "./Usuario_ejemplo.php";
require "./Empleado_ejemplo.php";


$usuarioUno = new Usuario("Esteban", "Quiroz");
$usuarioDos = new Empleado("Esteban", "Quiroz",34);

$datos = $usuarioUno ->mostrar();
$datosDos = Empleado::MostrarEstatico($usuarioDos);



echo $datosDos;

//var_dump($usuarioUno);


?>