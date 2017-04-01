 <?PHP

    class Fabrica  
    {
        private $_empleados= array();
        private $_razonSocial;
        
        function __construct($razonSocial){$this->_razonSocial = $razonSocial;}


        function AgregarEmpleado($persona)
        {
            if(array_push($this->_empleados,$persona))
            {   
                $this->EliminarEmpleadosRepetidos();
                return true;
            }
            else {return false;}

        }

        public function CalcularSueldos()
        {
            $totalSueldos=0;
            foreach ($this->_empleados as $key) 
            { 
                $totalSueldos+=$key->getSueldo();
            }
            return $totalSueldos;
        }
        public function EliminarEmpleado($persona)
        {
            $key = array_search($persona, $this->_empleados);
            if (false !== $key) 
            { 
                unset($this->_empleados[$key]);
                $arrayReindexado = array_values($this->_empleados);
                $this->_empleados = $arrayReindexado;
                return true;
            }
            else{return false;}
        }
        private function EliminarEmpleadosRepetidos()
        {
               $this->_empleados=array_values(array_unique($this->_empleados,SORT_REGULAR));
        }

        public function ToString()
        {

            $listaEmpleados="";
            foreach ($this->_empleados as $emp) 
            {
                $listaEmpleados= $listaEmpleados.$emp->ToString()."<br>";
            }
            return "Razon Social: ".$this->_razonSocial.
                    $listaEmpleados;
                    
        } 
    
    
    }
    



 ?>