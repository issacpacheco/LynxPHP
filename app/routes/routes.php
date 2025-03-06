<?php
// app/Routes/Router.php
namespace LynxPHP\Routes;

class Router
{
    protected $routes = [];

    // Método para agregar rutas GET
    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    // Método para manejar las rutas
    public function dispatch($uri, $method = 'GET')
    {
        if (isset($this->routes[$method][$uri])) {
            $action = $this->routes[$method][$uri];
            // Ejecutar la acción, que podría ser un controlador
            return $action();
        }
        throw new \Exception("Ruta no encontrada: $uri");
    }
}
