<?PHP
    require "Producto.php";
    require "Container.php";
    $producto1 = new Producto(1,"El producto 1", 100);
    $container = new Container(1);
    echo $producto1->ToString(); 
    
    $archivo = fopen("Producto.txt",'w');
    fwrite($archivo, $producto1->ToString());

    $container->AgregarProducto($producto1);

    for ($i=0;$i<2;$i++)
    {
         $container->AgregarProducto(new Producto($i,"El producto $i", $i));
    }

    var_dump($container);

?>