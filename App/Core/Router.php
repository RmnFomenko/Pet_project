<?php

namespace App\Core;

class Router
{
    public function run()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url_array = array_values(array_filter(explode('/', $url)));

        $controller_name = 'Main';
        $method_name = 'index';

        if (!empty($url_array[0])) {
            $controller_name = ucfirst($url_array[0]);
            $method_name = $url_array[1] ?? 'index';
        }

        $routes = include __DIR__ . '/../../Config/controller.php';

        $route_key = strtolower("{$controller_name}/{$method_name}");

        if (!array_key_exists($route_key, $routes)) {
            $controller_name = 'Error';
            $method_name = 'index';
        } else {
            list($controller_name, $method_name) = explode('/', $routes[$route_key]);
        }

        $controller_class = "App\\Controllers\\$controller_name";

        if (class_exists($controller_class) && method_exists($controller_class, $method_name)) {
            $controller = new $controller_class();
            $controller->$method_name();
        } else {
            echo "Controller or method not found!";
        }
    }
}
