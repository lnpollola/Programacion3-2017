<HTML>
<?PHP
    $contador = 0;

    if(isset($_REQUEST['futbol']))
    {
        $contador+=1;
    }

    if(isset($_REQUEST['tennis']))
    {
        $contador+=1;
    }
     if(isset($_REQUEST['natacion']))
    {
        $contador+=1;
    }

    echo $_REQUEST['nombre'],"<br>";
    echo "Los deportes son"," ",$contador;
?>
    <br>
    <a href="11_Checkbox_formulario.php" > Volver </a>
</HTML>
