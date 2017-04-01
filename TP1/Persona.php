<?PHP
    //Atributos
    abstract class Persona  
    {
        private $_apellido;
        private $_dni;
        private $_nombre;
        private $_sexo;

        function __construct($nombre,$apellido,$dni,$sexo)
        {
            $this->_apellido=$apellido;
            $this->_nombre=$nombre;
            $this->_dni=$dni;
            $this->_sexo=$sexo;
        }

        //Getters
        public function getApellido(){return $this->_apellido;}
        public function getDni()     {return $this->_dni;}
        public function getNombre()  {return $this->_nombre;}
        public function getSexo()    {return $this->_sexo;}

        abstract function Hablar($idioma);
        public function ToString()
        {
            return  "<br>Apellido: ".$this->getApellido()."-<br>".
                    "Nombre: "  .$this->getNombre()  ."-<br>".
                    "Dni: "     .$this->getDni()     ."-<br>".
                    "Sexo: "    .$this->getSexo()    ."-<br>";
        }
    
    }
    
   

?>