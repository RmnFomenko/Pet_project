<?php

require_once 'vendor/autoload.php';

use App\Core\Router;

$config = require 'Config/controller.php';

$router = new Router($config);

$router->run();
