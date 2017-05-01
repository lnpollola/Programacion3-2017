
<?PHP
    require "clases/producto.php";
    
    $producto = new Producto($_POST["codBarra"] ,$_POST["nombre"], $_FILES["archivo"]["name"]);

            if (!file_exists("productos.txt"))
                {
                    $archivoProductos= fopen("productos.txt","w");
                    fwrite($archivoProductos, $producto->ToString()."\r\n" );
                    echo "Se creo el archivo y  se guardo el producto";
                    echo '<a href="grillaArchivos.php">Mostrar</a>';
                }
            else 
                {
                    $archivoProductos= fopen("productos.txt","a");
                    fwrite($archivoProductos, $producto->ToString()."\r\n" );
                    echo "El producto se agrego correctamente";
                    echo '<a href="grillaArchivos.php"><br> Mostrar<br></a>';
                }
            //Muevo el archivo
            $name = $_FILES["archivo"]["name"];
            $archivoTmp = $_FILES["archivo"]["tmp_name"];
            copy($archivoTmp,"archivos"."/".$name);
        //  }
    //    else 
    //    {
    //       if ($_FILES["VArchivo"]["error"] > 0) 
    //       {
    //         echo $_FILES["VArchivo"]["error"] . "";
    //       } 
    //       else 
    //       {
    //         echo "Archivo no permitido";
    //       }
?>
