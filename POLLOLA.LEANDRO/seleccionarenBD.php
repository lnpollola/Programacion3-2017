<?PHP
    require_once "clases/AccesoDatos.php";
    require_once "clases/container.php";

   	$arrayRetorno = array();

	$_objetoAcceso = AccesoDatos::DameUnObjetoAcceso(); 
	$consulta = $_objetoAcceso->RetornarConsulta("SELECT numero , descripcion, pais, foto FROM conteiner"); 
	$consulta->execute();

	 while ($fila = $consulta->fetchObject("Container")) 
		 {
			 array_push($arrayRetorno,$fila);
		 }
		 
		 return $arrayRetorno;
    
    require_once "modificacion.php";
?>