<?PHP

    require "Fabrica.php";
    require "Persona.php";
    require "Empleado.php";

    $empleadoTP1_1=new Empleado("Leandro","Pollola",35316999,"M",000001,20000);

    //Punto2 - TP
    echo $empleadoTP1_1->ToString()."<br>";
    echo $empleadoTP1_1->Hablar("Español");

    //Punto4 - TP
    $fabricaTP1_1= new Fabrica("LaFabrica S.A.");
    $fabricaTP1_1->AgregarEmpleado($empleadoTP1_1);
    $fabricaTP1_1->AgregarEmpleado($empleadoTP1_1);

    var_dump($fabricaTP1_1);




?>
