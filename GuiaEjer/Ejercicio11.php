<?PHP
    function ElevarPotencia ($num,$potencia)
    {
        echo "El numero ",$num," elevado a la ",$potencia, " es: ", pow($num,$potencia),"<br>";
    }

    for($j=1;$j<5;$j++)
    {
        for($i=1;$i<5;$i++)
        {
            ElevarPotencia($i,$j);
        }   
    }
       
?>