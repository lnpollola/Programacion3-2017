<?PHP
    require "Funciones.php"; //funciona con o sin parentesis
    require "Calculadora.php";
    require_once "Funciones.php"; //diferencia entre include y require, el segundo si pincha corta el programa y no sigue
    //el require_once, si ya esta el archivo levantado, no lo vuelve a hacer y no da error
    // $Resultado = sumar(2,3);
    // echo "<br>";
    // var_dump($Resultado);

    $Resultado = Calculadora::Sumar(3,6);
    echo "<br>";
    var_dump($Resultado);

    Calculadora::$atributoEstatico = 10;        //El nombre de la variable va con $ cuando es estatico
    var_dump( Calculadora::$atributoEstatico);

    $MiCalc= new Calculadora();
    $MiCalc->atributoInstancia = 10;
    var_dump($MiCalc->atributoInstancia);
?>