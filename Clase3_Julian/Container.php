<?php

/**
 * 
 */
class Container// extends AnotherClass
{
    public $numero=0;
    public $producto;
    
    function __construct($num)
    {
        $this->numero=$num;
        $this->producto = array();
        
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
        
        $renglon=fgets($archivo);//devuelve un renglon
        //fijarse de usar fgets o fread
    
         $arrayaux=explode(";",$renglon);

         array_push($this->producto,$arrayaux);
    }
     //1-En la clase container, crear el metodo leerdearchivo
    //que lea de un archivo, un listado de producto cuyos
    //atributos estan separados por ;
    //luego cargar el array de producto con los objetos creados
    //a partir de los datos del archivo
}






?>