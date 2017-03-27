<?PHP
    for ($i=0;$i<11;$i++)
    { 
        if($i % 2 <> 0)
        {
            $arrayImpar["Numero$i"] = $i;
        }
    }
    
    //Recorro con for en un array asociativo
    // for($i=0;$i<11;$i++)
    // {
    //     if($i % 2 <> 0 )
    //     {
    //         echo $arrayImpar["Numero$i"],"<br>";
            
    //     }
    // }

    //Recorro con While
    // while (a <= 10) {
    //     # code...
    // }

    //Foreach
    foreach ($arrayImpar as $key ) {
        echo "$key<br>";
    }
?>