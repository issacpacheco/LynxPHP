<?php
use LynxPHP\Router;

$router = new Router();

$router->get('/', function() {
    return view('home');
});

$router->get('/usuarios', 'UsuariosController@index');
