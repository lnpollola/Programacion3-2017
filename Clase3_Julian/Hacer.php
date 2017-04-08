<?php
//COMENTO TODO LO QUE HICE EN LA PRIMERA PARTE DE LA CLASE

 require "Producto.php";
 require "Container.php";

// $producto1 = new Producto(10,"Celular",5000);

// // echo $producto1;
// echo "Primera parte - ARRAYS<br><br>";
// echo $producto1->ToString();

// $archivo=fopen("Producto.txt","w");

// fwrite($archivo,$producto1->ToString());
// fclose($archivo);
// echo "<br><br><br>";
// echo "Segunda parte - Archivos TXT<br><br>";
// $container1 = new Container(1);
//  for($i=0;$i<10;$i++)
//  {
//      $container1->AgregarProducto(new Producto($i,"Celular",$i+7000));

     
//  }

// echo "Datos var_dump del container:<br>";
// var_dump($container1);

// $container1->GuardarProductos();

//SEGUNDA PARTE DE LA CLASE CON HTML

//echo "Hola mundo";
//con el var dump sirve para ver que trae el html.

//var_dump($_REQUEST);

//el request toma los datos por post o por request. 
//el get es lo mas comun, lo recomendable es usar el post.
//var_dump($_GET);

//este es el var_dump de post para mostrar los datos que recibi.
echo "var_dump del _POST (osea lo que recibe y tiene cargado):<br>";
var_dump($_POST);
echo "<br>Fin del var_dump";
echo "<br>";
//Creo un producto con los datos que ingresa el usuario (los que recibe el _post)
$productohtml = new Producto($_POST["Codigo"],$_POST["Descripcion"],$_POST["Importe"],$_POST["NombreArchivo"]);
//uso el isset que devuelve un bool. En este caso lo uso para ver si 
//el usuario puso el boton Guardar.
if(isset($_POST["Guardar1"]))
{
    $archivohtml=fopen($productohtml->GetNombreArchivo(),"w");
    fwrite($archivohtml,$productohtml->ToString());
    fclose($archivohtml);
}
else if(isset($_POST["Leer1"])){
    $archivomemoria=fopen($productohtml->GetNombreArchivo(),"r");
    $renglon=fgets($archivomemoria);//devuelve un renglon
    //fijarse de usar fgets o fread
    
    $miarray=explode(";",$renglon);
    //me permite separar un string en un array mediante
    //mi delimitador

    echo "<br>";
    echo "Var_dump del array traido por archivo:<br>";
    var_dump($miarray);
    echo "<br>Fin del var_dump.<br><br>";
    echo "Cargue los datos del array en un producto y uso su Tostring delimitado por ; (puntoycoma):<br>";
    $productotest = new Producto($miarray[0],$miarray[1],$miarray[2]);
    echo $productotest->ToString();

    //para hacer en casa para completar este ejercicio
    //1-En la clase container, crear el metodo leerdearchivo
    //que lea de un archivo, un listado de producto cuyos
    //atributos estan separados por ;
    //luego cargar el array de producto con los objetos creados
    //a partir de los datos del archivo
    //2-Agregar un cuadro de texto, con el nombre del archivo en 
    //donde se van a guardar los datos. En ese nombre se guardaran
    //los datos cargados en los demas cuadros de texto. Si el archivo
    //existe, primero moveremos el archivo ya existente a la carpeta
    //backup, cambiandole el nombre por el nombre+fecha
    //3-A leer, si el archivo no existe, infromarlo.
    
}
else if(isset($_POST["Buscar1"])){
    if($_POST["Buscar1"]==$productohtml->GetNombreArchivo())
    {
        
        echo "Muestro producto: <br>"."<br>".$productohtml->ToString();
    }
    else {
        echo "Busqueda de archivo:<br>No se encontro el archivo.";
    }
}
else {
    # code...
}


?>