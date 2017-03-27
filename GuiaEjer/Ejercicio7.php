<?PHP
    for ($i=0;$i<11;$i++)
    { 
        if($i % 2 <> 0)
        {
            $arrayImpar["Numero$i"] = $i;
        }
    }
    
    //Recorro con for en un array anexado
    for($i=0;$i<11;$i++)
    {
        if($i % 2 <> 0 )
        {
            echo $arrayImpar["Numero$i"],"<br>";
            
        }
    }

?>