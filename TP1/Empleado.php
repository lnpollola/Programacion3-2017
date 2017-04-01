<?PHP

    class Empleado extends Persona
    {
        //Atributos
        protected $_legajo;
        protected $_sueldo;

        function __construct($nombre,$apellido,$dni,$sexo,$legajo,$sueldo)
        {   
            parent::__construct($nombre,$apellido,$dni,$sexo);
            $this->_legajo=$legajo;
            $this->_sueldo=$sueldo;
        }

        //Getters
        public function getLegajo(){return $this->_legajo;}
        public function getSueldo(){return $this->_sueldo;}

        //Funciones
        function Hablar($idioma)
        {
            return "El empleado habla ".$idioma;
        }

        public function ToString()
        {
            return  parent::ToString() ."-".
                    "Legajo: "         .$this->getLegajo() ."-".
                    "Sueldo: "         .$this->getSueldo() ;
        }
    }
    


?>