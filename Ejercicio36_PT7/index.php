<html>
    <body>
        <br><p style="color:black;"><b><u>Imagenes almacenadas:</b></u></p>
        <!--<table class="imagetable">-->
            <?PHP
                $imagenesAlm = scandir("Fotos/");

                foreach ($imagenesAlm as $imagen)
                {
                    if ($imagen!=="." && $imagen!=="..")
                    {
                        // echo "<img src=Fotos/$imagen alt='' border=3 width=100 height=100  ></img>";
                        echo "<a href=Fotos/$imagen target='_blank'><img src=Fotos/$imagen  border=1 width=100 height=100 ></a>";
                    }
                }
            ?>
        <!--</table>-->
    </body>
</html>