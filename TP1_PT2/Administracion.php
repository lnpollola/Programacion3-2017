
<?PHP
    require ("Empleado.php");
    
    if( trim($_POST["VNombre"])=='' || 
        trim($_POST["VApellido"])=='' || 
        trim($_POST["VDNI"])=='' || 
        trim($_POST["VSexo"])==''  || 
        trim($_POST["VLegajo"])==''  || 
        trim($_POST["VSueldo"])==''  
        || trim($_FILES["VArchivo"]["name"])==''
      )
    {
         echo "Todos los datos son obligatorios.\r\n";
         echo '<a href="index.html"> Volver a Ingresar</a>';
    }
    else 
    {
      if 
      (
          (
              ($_FILES["VArchivo"]["type"] == "image/jpg") ||
                ($_FILES["VArchivo"]["type"] == "image/bmp") ||
                ($_FILES["VArchivo"]["type"] == "image/gif") ||
                ($_FILES["VArchivo"]["type"] == "image/png") ||
                ($_FILES["VArchivo"]["type"] == "image/jpeg")
          ) 
          && ($_FILES["VArchivo"]["size"] < 1000000)
          && !file_exists("fotos/". $_FILES["VArchivo"]["name"])
      ) 
        {
            //Instancio el empleado 
            $empleado = new Empleado($_POST["VNombre"],$_POST["VApellido"],$_POST["VDNI"],$_POST["VSexo"],$_POST["VLegajo"],$_POST["VSueldo"],$_FILES["VArchivo"]["name"]);
            
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
                    fwrite($archivoEmpleados, $empleado->ToString()."\r\n" );
                    echo "El empleado se agrego correctamente";
                    echo '<a href="mostrar.php"><br> Mostrar<br></a>';
                }
            $nombreArchivo = $empleado->getNombre()."-".$empleado->getApellido().".jpeg";
            move_uploaded_file($_FILES["VArchivo"]["tmp_name"],
            "./fotos/" .$nombreArchivo);
            echo "Archivo Subido ";
            echo '<img src="./fotos/" .$nombreArchivo alt="" />';
         }
       else 
       {
          if ($_FILES["VArchivo"]["error"] > 0) 
          {
            echo $_FILES["VArchivo"]["error"] . "";
          } 
          else 
          {
            echo "Archivo no permitido";
          }
       }
         
 
    }

?>
