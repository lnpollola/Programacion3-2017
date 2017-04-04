<?PHP
    require "Producto.php";
    $producto1 = new Producto(1,"El producto 1", 100);

    echo $producto1->ToString(); 
    
    $archivo = fopen("Producto.txt",'w');
    fwrite($archivo, $producto1->ToString());

?>