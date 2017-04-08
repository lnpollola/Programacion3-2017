<?php

/**
 * 
 */
class Producto 
{
        public $codigo;
        public $descripcion;
        public $importe;
  
    
    public function __construct($cod,$descrip,$import)
    {
        $this->codigo=$cod;
        $this->descripcion=$descrip;
        $this->importe=$import;
    }

    public function ToString()
    {
        return $this->codigo.";".$this->descripcion.";".$this->importe;
    }
}





?>