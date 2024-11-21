<?php

namespace App\Core;

class Router
{
    const CONTROLLER_NAMESPACE = 'App\Controllers\\';

    public function run(): void
    {
        $namespace = $this->getNamespace();
        $method = $this->getMethod();

        if (!class_exists($namespace)) {
            $namespace = self::CONTROLLER_NAMESPACE . 'Error';
            $method = 'index';
        }

        $controller = new $namespace;

        if (!method_exists($controller, $method)) {
            $namespace = self::CONTROLLER_NAMESPACE . 'Error';
            $controller = new $namespace;
            $method = 'index';
        }

        $controller->$method();
    }

    private function getNamespace(): string
    {
        $controllerName = $this->prepareControllersName();
        if (is_string($controllerName)) {
            $namespace = $controllerName;
        } elseif (is_array($controllerName) && isset($controllerName[1])) {
            $namespace = $controllerName[1];
        } else {
            $namespace = 'Main';
        }

        return self::CONTROLLER_NAMESPACE . ucfirst($namespace);
    }

    private function getMethod(): string
    {
        $controllerName = $this->prepareControllersName();

        if (is_array($controllerName) && isset($controllerName[2]) && !empty($controllerName[2])) {
            return $controllerName[2];
        }

        return 'index';
    }

    private function prepareControllersName(): array|string
    {
        $result = 'Main';
        if (isset($_SERVER["REQUEST_URI"])) {
            // Разбиваем URI на части
            $result = explode("/", trim($_SERVER["REQUEST_URI"], "/"));
        }

        if (is_array($result) && empty($result[0])) {
            $result = 'Main';
        }

        return $result;
    }
}
