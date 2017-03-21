<?PHP 
    // $Nombre= " Leandro";
    // echo "Hola <br>" ;
    // echo $Nombre;
    // echo "Hola".$Nombre;

    //Ejercicio 1 Guia
  
    $acumulador=0;
    $auxAcum=0;
    $contador = 0;

    for ($i=1;$acumulador<1000;$i++)
    {    
        $acumulador+=$i;

        $contador++;

        if($acumulador>1000)
        {
            $auxAcum= $acumulador-$i;
        }
    }
    echo "$auxAcum <br>";
    echo "$contador<br>";
?>

<?PHP 
    //Ejercicio 2 Guia
    $fecha = date('d/m/y');
    $mes   = date('M');

    switch ($mes)
    {
        case 'Mar':
            echo "Estacion Otoño <br>";
            break;

    } 
        
    ECHO $fecha;
?>