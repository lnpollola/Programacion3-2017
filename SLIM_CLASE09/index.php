<?php

require '/vendor/autoload.php';

$app = new \Slim\App;

//EJEMPLOS
$app->GET('/get', function ($request,$response) {

    $response->getBody()->write("HOLA GET");

    return $response;
});

$app->POST('/post', function ($request,$response) {

    $response->getBody()->write("HOLA POST");

    return $response;
});

//TODOS
$app->get('/todos', function ($request, $response, $args) {
        $sth = $this->db->prepare("SELECT * FROM tasks ORDER BY task");
        $sth->execute();
        $todos = $sth->fetchAll();
        return $this->response->withJson($todos);
    });

//CON ID
 $app->get('/todo/[{id}]', function ($request, $response, $args) {
         $sth = $this->db->prepare("SELECT * FROM tasks WHERE id=:id");
        $sth->bindParam("id", $args['id']);
        $sth->execute();
        $todos = $sth->fetchObject();
        return $this->response->withJson($todos);
    });



$app->run();

