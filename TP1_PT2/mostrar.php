<?PHP
    require "Empleado.php";
    class Mostrar 
    {
    public static function LeerArchivo()
    {
        $archivoALeer=fopen("empleados.txt","r");
        var_dump($archivoALeer);
        $cantEmp=0;
        while (!feof($archivoALeer))
        {
            $cantEmp++;
            $renglon=fgets($archivoALeer);
            $arrayaux=explode("-",$renglon);
            $empleado[$cantEmp] = new Empleado($arrayaux[1],$arrayaux[0],$arrayaux[2],$arrayaux[3],$arrayaux[4],$arrayaux[5]);
            echo $empleado[$cantEmp]->ToString();
        }
    }
    

    }

    Mostrar::LeerArchivo();
   

?>      