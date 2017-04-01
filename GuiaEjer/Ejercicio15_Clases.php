<?PHP
    
    abstract class FiguraGeometrica 
    {
        //Atributos
        private $_color;
        protected $_perimetro;
        protected $_superficie;

        //Constructor 
        public function __construct(){}

        //Metodos Abstractos
        protected abstract function CalcularDatos();
        public abstract function Dibujar();     
        
        //Get y Set
        public function GetColor(){return $this->_color;}
        public function SetColor($figColor) {$this->_color = $figColor;}
        
        //Metodo Vitual
        public function ToString()
        {
            return "Perimetro: ".$this->_perimetro."<br>".
                   "Superficie: ".$this->_superficie."<br>".
                   "Color: ".$this->_color;
        }
    }

    class Rectangulo extends FiguraGeometrica
    {
        protected $_ladoDos;
        protected $_ladoUno;

        public function __construct($double1,$double2)
        {
            $this->_ladoDos = $double1;
            $this->_ladoUno = $double2;
            $this->CalcularDatos();
        }

        public function CalcularDatos()
        {
            $this->_superficie = $this->_ladoDos*$this->_ladoUno;
            $this->_perimetro = $this->_ladoDos*2+$this->_ladoUno*2;    
        }

        public function Dibujar()
        {
            for($i=1;$i<($this->_ladoUno+1);$i++)
            {
               $asteriscos="";
               for($j=0;$j<$this->_ladoDos;$j++)
                {
                    $asteriscos = $asteriscos."*";          
                }
               echo "<font color='blue'>$asteriscos<br></font>";
            }
        }
        public function ToString()
        {
            echo "///////////////////RECTANGULO///////////////////"."<BR>";
            echo  parent::ToString()."<br>".
                    "Lado Uno: ".$this->_ladoUno."<br>".
                    "Lado Dos: ".$this->_ladoDos."<br>";
            $this -> Dibujar();
        }
    }
    
    class Triangulo extends FiguraGeometrica
    {
        protected $_altura;
        protected $_base;

        public function __construct($base,$altura)
        {
            $this->_altura = $altura;
            $this->_base = $base;
            $this->CalcularDatos();
        }

        public function CalcularDatos()
        {
            $this->_superficie = $this->_base * $this->_altura;
            $this->_perimetro = $this->_base*3;
        }


        public function Dibujar()
        {
            for($i=1;$i<($this->_base+1);$i++)
            {
                $asteriscos="";
                for($j=0;$j<$i;$j++)
                {
                    $asteriscos = $asteriscos."*";          
                }
                echo "<font color='red'>$asteriscos<br></font>";
            }

        }
        public function ToString()
        {
            echo "///////////////////TRIANGULO///////////////////"."<BR>";
            echo parent::ToString()."<br>".
                    "Altura: ".$this->_altura."<br>".
                    "Base: ".$this->_base."<br>";
            $this->Dibujar();
        }
    }


?>