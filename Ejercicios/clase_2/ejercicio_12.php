<?php

/*
Esteban M. Quiroz

Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.

 */

$arrayPalabra = array("h","o","l","a");

$arrayPalabraInvertida = invertirPalabra($arrayPalabra);


for ($i=0; $i < count($arrayPalabraInvertida) ; $i++) { 
    echo $arrayPalabraInvertida[$i];
}




function invertirPalabra($array)
{
    $arrayAux = [];
    $cantidad = count($array);
    $j = $cantidad - 1;

    for ($i=0; $i < $cantidad ; $i++) { 
        $arrayAux[$i] = $array[$j];
        $j--;
    }

    return $arrayAux;
}


?>