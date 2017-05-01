<?PHP
    require_once "clases/producto.php";

     $archivo = "archivo.txt"; 
    $abrir = fopen($archivo, 'r+'); 
    $contenido = fread($abrir, filesize($archivo)); 
    fclose($abrir); 
    $contenido2 = explode("\r\n", $contenido); 
    //separamos la primera variable    de la fila 3     
    $variable1 = explode("|", $contenido2[2]);  
    $variable1[0] = "valor de la primera variable"; 
    $variable1 = implode("|", $variable1);     
    //devolvemos el valor a la linea     
    $contenido2[2] = "$variable1";  //toda la fila 3 cambiada 
    //juntamos lo demas     
    $nuevo = implode("\r\n", $contenido2);     
    $abrir = fopen($archivo, 'w'); 
    fwrite($abrir, $nuevo); 
    fclose($abrir);  
    
    require_once "modificarArchivo.php";
?>