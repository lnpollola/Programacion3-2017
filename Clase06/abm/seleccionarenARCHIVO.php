<?PHP
    require_once "clases/producto.php";


    $archivo = "productos.txt"; 
    $abrir = fopen($archivo, 'r+'); 
    $contenido = fread($abrir, filesize($archivo));

    var_dump($contenido); 
    fclose($abrir); 
    $contenido2 = explode("\r\n", $contenido); 
     var_dump($contenido2);
    //separamos la primera variable    de la fila 3     
    //nombredeproducto
    $variable1 = explode("-", $contenido2[2]);  
    $variable1[0] = "valor de la primera variable"; 
    $variable1 = implode("-", $variable1);     
    //devolvemos el valor a la linea     
    $contenido2[2] = "$variable1";  //toda la fila 3 cambiada 
    //juntamos lo demas     
    $nuevo = implode("\r\n", $contenido2);     
    $abrir = fopen($archivo, 'w'); 
    fwrite($abrir, $nuevo); 
    fclose($abrir);  
    
    // require_once "modificarArchivo.php";
?>