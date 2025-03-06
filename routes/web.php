<?php
// Cargar el autoloader de Composer
require_once __DIR__ . '/vendor/autoload.php';

// Incluir helpers
require_once __DIR__ . '/app/Helpers/Helpers.php';

// Crear instancia del framework
$app = new LynxPHP\Application();

// Registrar las rutas
use LynxPHP\Routes\Router;

$router = new Router();

$router->get('/', function() {
    return view('home');  // Devuelve la vista 'home.php'
});

// Ejecutar la aplicación
$app->run();
