<?php

/**
 * 
 */
class Container// extends AnotherClass
{
    public $numero=0;
    public $producto;
    public $nombrearchivo="";
    
    function __construct($num,$nombreArchivo)
    {
        $this->numero=$num;
        $this->producto = array();
        $this->nombrearchivo = $nombreArchivo; 
        
    }

    public function GetNombreArchivo()
    {
        return $this->nombrearchivo;
    }

    public function AgregarProducto($producto)
    {
        array_push($this->producto,$producto);
    }
    public function GuardarProductos()
    {
        $ListadoDeProductos=fopen("ListadoDeProductos.txt","w");

        foreach ($this->producto as $key) {
            fwrite($ListadoDeProductos,$key->ToString());
        }
        fclose($ListadoDeProductos);
        
    }
    public function LeerDeArchivo($archivo)
    {
        $archivoALeer=fopen($archivo,"r");
        while (!feof($archivoALeer))
        {
            $renglon=fgets($archivoALeer);//devuelve un renglon
            $arrayaux=explode(";",$renglon);
            array_push($this->producto,new Producto($arrayaux[0],$arrayaux[1],$arrayaux[2]));
            
        }
    }
}






?>