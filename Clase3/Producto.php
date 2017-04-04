<?PHP
    class Producto
    {
        public $codigo;
        public $descripcion;
        public $importe;

        function __construct($codigo,$descripcion,$importe)
        {
            $this->codigo      = $codigo;
            $this->descripcion = $descripcion;
            $this->importe     = $importe;
        }

        public function ToString()
        {
            return "Codigo: ".$this->codigo.
                 " Descripcion: ".$this->descripcion.
                 " Importe: ".$this->importe."\r\n";
        }

    }
    

?>