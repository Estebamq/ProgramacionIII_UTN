<?php
class Auto{
    private $color;
    private $precio;
    private $marca;
    public $fecha;

    function __construct()
	{
		//obtengo un array con los parámetros enviados a la función
		$params = func_get_args();
		//saco el número de parámetros que estoy recibiendo
		$num_params = func_num_args();
		//cada constructor de un número dado de parámtros tendrá un nombre de función
		//atendiendo al siguiente modelo __construct1() __construct2()...
		$funcion_constructor ='__construct'.$num_params;
		//compruebo si hay un constructor con ese número de parámetros
		if (method_exists($this,$funcion_constructor)) {
			//si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
			call_user_func_array(array($this,$funcion_constructor),$params);
		}
	}
  
	//ahora declaro una serie de métodos constructores que aceptan diversos números de parámetros
	function __construct0()
	{
		$this->__construct2("sin marca", "sin color");
	}
	
    function __construct2($marca,$color)
	{
		$this->__construct3($marca,$color,0.0);
	}

    public function __construct3($marca, $color,$precio) {
        $this->__construct4($marca,$color,$precio,date("d-m-Y"));

    }
		
    public function __construct4($marca, $color,$precio,$fecha) {
        $this->color = $color;
        $this->marca = $marca;
        $this->precio = $precio;
        $this->fecha = $fecha;

    }




    //getter y setter
    public function getMarca()
    {
        return $this-> marca;
    }

    public function getColor()
    {
        return $this-> color;
    }

    public function getPrecio()
    {
        return $this-> precio;
    }

    public function getFecha()
    {
        return $this-> fecha;
    }

    /**
     * [AgregarImpuestos description]
     *
     * @param   [type]  $aumento  [$aumento description]
     *
     * @return  [type]            [return description]
     */
    public function AgregarImpuestos($aumento)
    {
        return $this->precio + $aumento;

    }


    public function Equals($auto)
    {
        $retorno = false;

        if($this->getMarca() == $auto ->getMarca()){
            $retorno = true;
        }

        return $retorno;
        

    }



    public static function Add($autoUno, $autoDos){
        $retorno = 0;

        if($autoUno->Equals($autoDos) && $autoUno->getColor() == $autoDos->getColor() ){
            $retorno = $autoUno->getPrecio() + $autoDos->getPrecio();
        }

        return $retorno;
    }


    /**
     * Muetra los datos de los autos
     *
     * @param   [Auto]  $auto  [$auto description]
     *
     * @return  [string] una cadena de texto
     */
    public static function MostrarAuto($auto){

        echo "Marca:" . $auto->getMarca() ." - Color: ".$auto->getColor()." - Precio: ".$auto->getPrecio() ." - fecha: " . $auto -> getFecha() . "</br>";
    }




}

?>