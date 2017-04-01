<?PHP
    require "Ejercicio15_Clases.php";

    $miTriangulo = new Triangulo(70,60);
    $miTriangulo -> SetColor("Rojo");

    $ResultadoTriangulo=$miTriangulo->ToString();
    echo $ResultadoTriangulo;

    // var_dump($miTriangulo);

    $miRectangulo = new Rectangulo(4,10);
    $miRectangulo -> SetColor("Azul");

    $ResultadoRectangulo=$miRectangulo->ToString();
    echo $ResultadoRectangulo;



?>