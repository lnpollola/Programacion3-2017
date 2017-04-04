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
        {array_push($this->productos, $producto);}

        public function GuardarProductos()
        {
            $ListadoProductos = fopen("Listado de productos.txt",'w');
            foreach ($this->productos as $Prod)
            {
                fwrite($ListadoProductos, $Prod->ToString());
            }
         fclose($ListadoProductos);
        }

       

    }
?>