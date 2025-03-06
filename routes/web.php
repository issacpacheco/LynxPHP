<?php
use LynxPHP\Router;

$router = new Router();

$router->get('/', function() {
    return view('home');
});

// routes/web.php
$router->get('/', 'HomeController@index');
$router->get('/usuarios', 'UsuariosController@index');
