
<?PHP
    require ("Empleado.php");
    
    if( trim($_POST["VNombre"])=='' || 
        trim($_POST["VApellido"])=='' || 
        trim($_POST["VDNI"])=='' || 
        trim($_POST["VSexo"])==''  || 
        trim($_POST["VLegajo"])==''  || 
        trim($_POST["VSueldo"])=='')
    {
         echo "Todos los datos son obligatorios.\r\n";
         echo '<a href="index.html"> Volver a Ingresar</a>';
    }
    else 
    {
         $empleado = new Empleado($_POST["VNombre"],$_POST["VApellido"],$_POST["VDNI"],$_POST["VSexo"],$_POST["VLegajo"],$_POST["VSueldo"]);
         
        if (!file_exists("empleados.txt"))
        {
            $archivoEmpleados= fopen("empleados.txt","w");
            fwrite($archivoEmpleados, $empleado->ToString()."\r\n" );
            echo "Se creo el archivo y  se guardo el empleado";
            echo '<a href="mostrar.php">Mostrar</a>';
        }
        else 
        {
            $archivoEmpleados= fopen("empleados.txt","a");
            fwrite($archivoEmpleados, $empleado->ToString() );
            echo "El empleado se agrego correctamente";
            echo '<a href="mostrar.php">Mostrar</a>';
        }
 
    }

?>
