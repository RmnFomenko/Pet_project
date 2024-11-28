<?php

namespace App\Core;

class Router
{
    private array $request_uri = [];
    private string $name_controller = 'main';
    private string $name_method = 'index';
    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->processRequest();
        $this->validate();
    }

    private function processRequest(): void
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/'; // Получаем URI
        $uri = trim($uri, '/'); // Убираем начальные и конечные слэши
        $this->request_uri = $uri ? explode('/', $uri) : ['main', 'index']; // Если пусто — назначаем main/index

        $this->name_controller = strtolower($this->request_uri[0] ?? 'main'); // Первый сегмент — контроллер
        $this->name_method = strtolower($this->request_uri[1] ?? 'index'); // Второй сегмент — метод
    }

    private function validate(): void
    {
        $controller_method = "{$this->name_controller}/{$this->name_method}";

        if (!isset($this->config[$controller_method])) {
            $controller_method = 'error/index'; // Если такого метода нет, подключаем ошибку
        }

        // Разбираем и назначаем контроллер и метод
        list($this->name_controller, $this->name_method) = explode('/', $this->config[$controller_method]);
    }

    public function run(): void
    {
        $controller_class = "App\\Controllers\\" . ucfirst($this->name_controller);
        $method = $this->name_method;

        if (class_exists($controller_class) && method_exists($controller_class, $method)) {
            $controller = new $controller_class();
            $controller->$method();
        } else {
            echo "Controller or method not found!";
        }
    }
}

