<?PHP
    require "Persona.php";
    require "Empleado.php";

    $empleadoTP1_1=new Empleado("Leandro","Pollola",35316999,"M",000001,20000);

    echo $empleadoTP1_1->ToString()."<br>";
    echo $empleadoTP1_1->Hablar("Español");


?>
