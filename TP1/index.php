<?PHP

    require "Fabrica.php";
    require "Persona.php";
    require "Empleado.php";

    $empleadoTP1_1=new Empleado("Leandro","Pollola",35316999,"M",000001,20000);
    $empleadoTP1_2=new Empleado("Leandro","Rodriguez",35344699,"M",000002,70000);

    //Punto2 - TP
    echo "Punto 1: ".$empleadoTP1_1->ToString()."<br>";
    echo "Punto 2: ".$empleadoTP1_1->Hablar("Español")."<br>";

    //Punto4 - TP
    echo "Punto 4: <br>";
    $fabricaTP1_1= new Fabrica("LaFabrica S.A.");
    $fabricaTP1_1->AgregarEmpleado($empleadoTP1_1);
    $fabricaTP1_1->AgregarEmpleado($empleadoTP1_2);
    $fabricaTP1_1->AgregarEmpleado($empleadoTP1_1);
    
    
    $fabricaTP1_1->EliminarEmpleado($empleadoTP1_2);
    echo $fabricaTP1_1->Tostring();
    echo "Sueldos total: ".$fabricaTP1_1->Calcularsueldos()."<br>";
    



?>
