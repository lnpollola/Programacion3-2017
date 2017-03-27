<html>
    <head>
        Confeccionar un formulario que solicite la carga del nombre de una persona y que permita seleccionar una serie de deportes que practica (futbol, basket, tennis, voley)
        <br>
        Mostrar en la página que procesa el formulario la cantidad de deportes que practica.
    </head>
    <br><br>

    <body>
        <form method="post" action="11_Checkbox_program.php">
            Ingrese el nombre de la persona:
            <input type="text" name="nombre">
            <br>
            Seleccione el deporte que practica:
            <br>
            <input type="checkbox" name="futbol">Futbol
            <br>
            <input type="checkbox" name="tennis">Tennis
            <br>
            <input type="checkbox" name="natacion">Natacion
            <br>
            <input type="submit" value="Confirmar">
        </form>
    </body>
</html>