<?PHP
    require_once "clases/producto.php";

    $arrayArchivo = Producto::TraerTodosLosProductos();
    //separamos la primera variable    de la fila 3     
    $i = 0;
    foreach ($arrayArchivo as $prod)
    {   
        
        // $codComp = $prod["codBarra"];
        if($_POST["codBarra"] == $prod->GetCodBarra())
        {
            echo $i;
            break;
        }   
        $i++;
    }  
    
    //Abro el archivo para sobreescribir
    $archivo = "productos.txt"; 
    $abrir = fopen($archivo, 'r+'); 
    $contenido = fread($abrir, filesize($archivo));
    fclose($abrir); 

    //Guardo el contenido en un array
    $contenido2 = explode("\r\n", $contenido);
    //Veo la variable que quiero modificar, en este caso el numero 
    //El numero lo obtuve del foreach anterior
    $variable1 = explode("-", $contenido2[$i]);
    //devolvemos el valor a la linea   
    $variable1[0] = "1010 ";  
    $variable1 = implode("-", $variable1); 
    //Reemplazo la linea entera con el nuevo valor     
    $contenido2[$i] = "$variable1";
    //Dejo en nuevo toda la modificacion entera
    $nuevo = implode("\r\n", $contenido2);     
    $abrir = fopen($archivo, 'w'); 
    fwrite($abrir, $nuevo); 
    fclose($abrir);  
    

//    3     
//     $variable1 = explode("|", $contenido2[2]);  
//     //nombredeproducto
//     $variable1 = explode("-", $contenido2[2]);  
//     $variable1[0] = "valor de la primera variable"; 
//     $variable1 = implode("|", $variable1);     
//     $variable1 = implode("-", $variable1);     
//     //devolvemos el valor a la linea     
//     $contenido2[2] = "$variable1";  //toda la fila 3 cambiada 
//     //juntamos lo demas     
//     fwrite($abrir, $nuevo); 
//     fclose($abrir);  


    // require_once "modificarArchivo.php";
?>