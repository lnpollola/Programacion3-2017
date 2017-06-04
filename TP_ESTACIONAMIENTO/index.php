<?php

require '/vendor/autoload.php';
require '/clases/usuario.php';

$app = new \Slim\App;

//EJEMPLOS
$app->GET('/get', function ($request,$response) {

    $response->getBody()->write("HOLA GET");

    return $response;
});


$app->get('/traertodosUsuarios', function ($request, $response) {
    $usuarios = Usuario::TraerTodosLosusuarios();
    return $response->withJson($usuarios);
});


$app->get('/traeruno/[{id}]', function ($request, $response, $args) {
          $uno = Usuario::TraerUnUsuarioBD($args['id']);
          return $response->withJson($uno);
        });
$app->post('/alta', function ($request, $response) {
    require_once("funciones/altaenBD.php");
    // return $response->write("alta.");
});
$app->delete('/baja', function ($request, $response) {
    return $response->write("delete.");
});
$app->put('/modificacion', function ($request, $response) {
    return $response->write("modificacion.");
});
$app->patch('/cambiarestado', function ($request, $response) {
    return $response->write("cambiarestado.");
});
$app->post('/validarusuario', function ($request, $response) {
    return $response->write("validarusuario.");
});




$app->run();

