<?PHP
    class Container 
    {
        public $numero;
        public $productos;

        function __construct($numero)
        {
            $this->numero = $numero;
            $this->productos = array();
        }

        public function AgregarProducto($producto)
        {
            array_push($this->productos, $producto);              
        }

    }
?>