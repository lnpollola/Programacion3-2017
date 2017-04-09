<?PHP
    require "Empleado.php";
    class Mostrar 
    {
    public static function LeerArchivo()
    {
        $archivoALeer=fopen("empleados.txt","r");
        $cantEmp=0;
        do
        {
            $cantEmp++;
            $renglon=fgets($archivoALeer);
            $arrayaux= explode("-",$renglon,6);
            $empleado[$cantEmp] = new Empleado($arrayaux[0],$arrayaux[1],$arrayaux[2],$arrayaux[3],$arrayaux[4],$arrayaux[5]);
            echo $empleado[$cantEmp]->ToString();
        }  while (!feof($archivoALeer)&&trim(fgets($archivoALeer))!='');
      
    }
    

    }

    Mostrar::LeerArchivo();
   

?>      