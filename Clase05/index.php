<?PHP
    //Abrir conexion
    $conexion = mysqli_connect("127.0.0.1","root","","ejemplouno");
    $consultaTest="SELECT * FROM USUARIO ";

    $consultaQuery= mysqli_query($conexion,$consultaTest);
    // var_dump($consultaQuery);

    $respuesta= mysqli_fetch_object($consultaQuery);
    var_dump($respuesta);

    //Cerrar conexion
    mysqli_close($conexion);

?>