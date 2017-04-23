<?PHP
    if(isset($_REQUEST["Selecciono1"]))
    {
   
    var_dump($_FILES["ArchCarga1"]);
    switch ($_FILES["ArchCarga1"]["type"])
    {
        case "image/jpg" || "image/jpeg" || "image/gif":
            if ($_FILES["ArchCarga1"]["size"]<300000)
            {
                 echo "El archivo esta ok";
            }
            else
            {
                echo "El archivo supera el limite de 300kb";
            }
            break;
         case "image/jpg" || "image/jpeg" || "image/gif":
          

    }

    }
?>