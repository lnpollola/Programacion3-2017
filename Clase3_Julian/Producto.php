<?php

/**
 * 
 */
class Producto 
{
        public $codigo;
        public $descripcion;
        public $importe;
        public $nombrearchivo;
    
    public function __construct($cod,$descrip,$import,$nombredearchivo)
    {
        $this->codigo=$cod;
        $this->descripcion=$descrip;
        $this->importe=$import;
        $this->nombrearchivo=$nombredearchivo;
    }
    public function GetNombreArchivo()
    {
        return $this->nombrearchivo;
    }

    public function ToString()
    {
        return $this->codigo.";".$this->descripcion.";".$this->importe;
    }
}





?>