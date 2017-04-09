<?PHP
    require "Persona.php";
    class Empleado extends Persona
    {
        //Atributos
        protected $_legajo;
        protected $_pathFoto;
        protected $_sueldo;

        function __construct($apellido,$nombre,$dni,$sexo,$legajo,$sueldo,$pathFoto)
        {   
            parent::__construct($nombre,$apellido,$dni,$sexo);
            $this->_legajo=$legajo;
            $this->_sueldo=$sueldo;
            $this->_pathFoto=$pathFoto;
        }

        //Getters
        public function getLegajo(){return $this->_legajo;}
        public function getPathFoto(){return $this->_pathFoto;}
        public function getSueldo(){return $this->_sueldo;}

        //Funciones
        function Hablar($idioma)
        {
            return "El empleado habla ".$idioma;
        }

        public function setPathFoto($foto)
        {
            $this->_pathFoto = $foto;
        }
        public function ToString()
        {
            return  parent::ToString() ."-".
                    $this->getLegajo() ."-".
                    $this->getSueldo() ."-".
                    $this->getPathFoto();
        }
    }
    


?>