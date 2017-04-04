<?PHP
    class Producto
    {
        public $_codigo;
        public $_descripcion;
        public $_importe;

        function __construct($codigo,$descripcion,$importe)
        {
            $this->_codigo      = $codigo;
            $this->_descripcion = $descripcion;
            $this->_importe     = $importe;
        }

        public function ToString()
        {
            return "Codigo: ".$this->_codigo."<br>".
                 "Descripcion: ".$this->_descripcion."<br>".
                 "Importe: ".$this->_importe;
        }

    }
    

?>