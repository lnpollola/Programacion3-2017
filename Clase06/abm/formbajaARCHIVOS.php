<<html>
<head>
	<title>BAJA de PRODUCTOS</title>
	  
		<meta charset="UTF-8">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<a class="btn btn-info" href="index.html">Menu principal</a>
<?php     
	require_once("clases\producto.php");
?>
	<div class="container">
	
		<div class="page-header">
			<h1>PRODUCTOS</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>BAJA - LISTADO - con archivos -</h1>

			<form id="FormIngreso" method="post" enctype="multipart/form-data" action="bajaARCHIVOS.php" >
				<input type="text" name="codBarra" placeholder="Ingrese c&oacute;digo de barras"  />
				<input type="submit" class="MiBotonUTN" name="baja" />
			</form>
            <?php 

            $ArrayDeProductos = Producto::TraerTodosLosProductos(); //MODIFIQUE ESTE POR BD AGREGADO AL FINAL LLAMANDO AL NUEVO METODO

            echo "<table class='table'>
                    <thead>
                        <tr>
                            <th>  COD. BARRA </th>
                            <th>  NOMBRE     </th>
                            <th>  FOTO       </th>
                        </tr> 
                    </thead>";   	

                foreach ($ArrayDeProductos as $prod){

                    echo " 	<tr>
                                <td>".$prod->GetCodBarra()."</td>
                                <td>".$prod->GetNombre()."</td>
                                <td><img src='archivos/".$prod->GetPathFoto()."' width='100px' height='100px'/></td>
                            </tr>";
                }	
            echo "</table>";		
            ?>
		</div>
        	
	</div>
</body>
</html>