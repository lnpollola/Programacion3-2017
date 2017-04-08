<?PHP

    require "Fabrica.php";
    require "Persona.php";
    require "Empleado.php";

    $empleadoTP1_1=new Empleado("Carlos","Estevez",35316999,"M",000001,20000);
    $empleadoTP1_2=new Empleado("Jose","Rodriguez",35344699,"M",000002,70000);
    $empleadaTP1_1=new Empleado("Marta","Lopez",46039610,"F",000003,150000);
    $empleadaTP1_2=new Empleado("Lorene","Mazales",493710583,"F",000004,250000);


    //Punto2 - TP
    echo "Punto 1: ".$empleadoTP1_1->ToString()."<br>";
    echo "Punto 2: ".$empleadoTP1_1->Hablar("Español")."<br>";

    //Punto4 - TP
    echo "Punto 4: <br>";
    $fabricaTP1_1= new Fabrica("LaFabrica S.A.");
    $fabricaTP1_1->AgregarEmpleado($empleadoTP1_1);
    $fabricaTP1_1->AgregarEmpleado($empleadoTP1_2);
    //Agrego Duplicado
    $fabricaTP1_1->AgregarEmpleado($empleadoTP1_1);
    $fabricaTP1_1->AgregarEmpleado($empleadaTP1_1);
    $fabricaTP1_1->AgregarEmpleado($empleadaTP1_2);
    
    
    $fabricaTP1_1->EliminarEmpleado($empleadoTP1_2);
    $fabricaTP1_1->EliminarEmpleado($empleadaTP1_2);
    echo $fabricaTP1_1->Tostring();
    echo "Sueldos total: ".$fabricaTP1_1->Calcularsueldos()."<br>";
?>
