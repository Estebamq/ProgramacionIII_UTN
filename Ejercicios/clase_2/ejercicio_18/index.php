<?php
    /*
    Esteban M. Quiroz
    Aplicación No 18 (Auto - Garage)
    Crear la clase Garage que posea como atributos privados:

    _razonSocial (String)
    _precioPorHora (Double)
    _autos (Autos[], reutilizar la clase Auto del ejercicio anterior)
    Realizar un constructor capaz de poder instanciar objetos pasándole como

    parámetros: i. La razón social.
    ii. La razón social, y el precio por hora.

    Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
    que mostrará todos los atributos del objeto.
    Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
    objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
    Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
    (sólo si el auto no está en el garaje, de lo contrario informarlo).
    Ejemplo: $miGarage->Add($autoUno);
    Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
    “Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). Ejemplo:
    $miGarage->Remove($autoUno);
    En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos
    los métodos.
    
    
    */

    include "./Garage.php";

    //$nuevoGarage = new Garage("AutosG");
    $nuevoGarage = new Garage("AutosG",1500);

    //dos autos con el mismo precio
    $autoUno = new Auto("Fiat","Rojo");
    $autoDos = new Auto("Fiat","Azul");

    // dos objetos “Auto” de la misma marca, mismo color y distinto precio.
    $autoTres = new Auto("Audi","Rojo",13.1);
    $autoCuatro = new Auto("BMW","Rojo",14.1);

    //un objeto “Auto” utilizando la sobrecarga restante.
    $autoQuinto = new Auto("Ford","gris",165.1,"12-2-2023");
    
    echo "******Agregar auto*******" . "</br>";
    $nuevoGarage ->Add($autoUno);
    //auto igual al primero
    $nuevoGarage ->Add($autoDos);
    $nuevoGarage ->Add($autoTres);
    $nuevoGarage ->Add($autoCuatro);
    


    $nuevoGarage->MostrarGarage();

    echo "******Eliminar auto*******" . "</br>";

    echo $nuevoGarage ->Remove($autoQuinto);

    $nuevoGarage->MostrarGarage();

    echo "*************" . "</br>";

    

    


?>