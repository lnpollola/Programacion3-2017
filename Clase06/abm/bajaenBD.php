<?PHP
    require_once "clases/AccesoDatos.php";
    $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
    $consulta = $objetoAcceso->RetornarConsulta('DELETE FROM producto WHERE codigo_barra=:id');

    try 
    {
        $consulta->bindvalue(':id',$_POST["codBarra"], PDO::PARAM_INT);
        $consulta->execute();
        if ($consulta->rowCount() == 0)
        {
            echo "El elemento no existe"."<br>";    
            require_once "baja.php";
        }
        else 
        {
            echo "Se eliminaron ". $consulta->rowCount() . "filas";
        }
        echo "<a href=index.html> Volver </a>";
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
?>