<?PHP
    require_once "clases/AccesoDatos.php";
    $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();

    $consulta = $objetoAcceso->RetornarConsulta('UPDATE producto SET codigo_barra= :codBarra, nombre= :nombre, path_foto = :pathFoto WHERE codigo_barra=:codAnterior');

    $consulta->bindvalue(":codAnterior", $_POST["codAnterior"],PDO::PARAM_INT);
    $consulta->bindvalue(':codBarra',$_POST["codBarra"], PDO::PARAM_INT);
    $consulta->bindvalue(':nombre',$_POST["nombre"], PDO::PARAM_STR);
    $consulta->bindvalue(':pathFoto',$_FILES["archivo"]["name"], PDO::PARAM_STR);
    $consulta->execute();

    echo "Se actualizo ". $consulta->rowCount() . "registro/s";
    
    echo "<a href=modificacion.php> Volver </a>";
?>