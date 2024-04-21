<?php
    include "./../ejercicio_17/Auto.php";
    
    class Garage{
       private $razonSocial;
       private $precioPorHora;
       private $autos;
    
        
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
            $this->__construct1("sin razon social");
        }
        
        function __construct1($marca)
        {
            $this->__construct2($marca,0.0);
        }

        
        function __construct2($razonSocial,$precioPorHora)
        {
            $this->razonSocial = $razonSocial;
            $this->precioPorHora = $precioPorHora;
            $this->autos=[];
        }
        
        /**
         * Muestra la informacion del garage
         *
         * @return  [string]  [retorna un mensaje con toda la informacion del garage]
         */
        public function MostrarGarage(){
            echo "La razon social es: " . $this->razonSocial . "</br>" . "El precio por hora es: " . $this->precioPorHora . "</br>";
            if(count($this->autos) != 0){
                foreach ($this->autos as $key => $value) {
                    Auto::MostrarAuto($value);
                }

            }else{
                echo "no hay autos en el garage";
            }
        }
        
        /**
         * [Busca si hay una auto igual en el garage]
         *
         * @param   [Auto]  $auto  [$auto description]
         *
         * @return  [type]         [retorna true or false si puede encontrar el auto en el garage]
         */
        public function Equals($auto){
            $retorno = false;
            if(count($this->autos) != 0){
                foreach ($this->autos as $value) {
                    $retorno = $value->Equals($auto);
                    if($retorno){
                        break;
                    }
                }
            }
            return $retorno;
        }


        /**
         * Agrega un auto al garage
         *
         * @param   [Auto]  $auto  [$auto description]
         *
         * @return  [string]         [retorna un mensaje si pudo o no agregar el auto]
         */
        public function Add($auto){
            $mensaje = "El auto esta en el garaje";
            if(!($this->Equals($auto))){
                array_push($this->autos,$auto);
                $mensaje = "auto agregado al garaje";
            }
            
            return $mensaje;
        }

        
        /**
         * [borra un auto del garage]
         *
         * @param   [Auto]  $auto  [$auto description]
         *
         * @return  [string]         [retorna un mensaje si pudo o no eliminar el auto]
         */
        function Remove($auto) {
            $mensaje = "El auto no esta en el garaje" . "</br>";
            $indice = array_search($auto,$this->autos);
            if ($indice !== false) {
                unset($this->autos[$indice]);
                $mensaje = "Auto removido al garaje" . "</br>";
            }
            return $mensaje;
        }




    }
    

?>