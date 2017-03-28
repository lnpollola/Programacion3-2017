<HTML>
    <HEAD>
    <TITLE> Ejercicio 5 </TITLE>
    </HEAD>
    <BODY>
<?PHP 

    switch (substr($_REQUEST['num'],0,1))
        {
            case '2':
                echo "Veinte";
                break;
            case '3':
                echo "Treinta";
                break;
            case '4':
                echo "Cuarenta";
                break;
            case '5':
                echo "Cincuenta";
                break;
            case '6':
                echo "Sesenta";
                breaK;
        }

            switch (substr($_REQUEST['num'],1,1))
            {
            case '1':
                echo " y uno";
                break;
            case '2':
                echo " y dos";
                break;
            case '3':
                echo " y tres ";
                break;
            case '4':
                echo " y cuatro";
                breaK;
            case '5':
                echo " y cinco";
                break;
            case '6':
                echo " y seis";
                break;
            case '7':
                echo " y siete";
                break;
            case '8':
                echo " y ocho";
                break;
            case '9':
                echo " y nueve";
                break;
            }

    ?>

    
    <!--//Form confirmar><!-->
    <!--<form method="post" action="ProgInput.php">
    Desea regresar s/n
    <br>
    <input type="radio" name="SI" value="s"> SI
    <br>
    <input type="radio" name="NO" value="n"> NO
    <br>
    <input type="submit" value="confirmar">
    </form>-->

    <a href="ProgInput.php"> Volver> </a>
    
</HTML>
