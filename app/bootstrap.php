<?php

use Core\View;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../core/database.php';

$method = $_SERVER['REQUEST_METHOD'];

$path = $_SERVER['REQUEST_URI'] ?? '/';

$router = new Core\Router($method, $path);

# Rotas
$router->get('/ola-{valor}', 'App\Controllers\HomeController::hello');

$router->get('/users', 'App\Controllers\HomeController::listUsers');

$result = $router->handler();

if (!$result) {
    http_response_code(404);
    echo 'Página não encontrada!';
    die();
}

$view = new View;

if ($result instanceof Closure) {

    echo $result($router->getParams());

} elseif (is_string($result)) {

    $result = explode('::', $result);

    $controller = new $result[0]($view);

    $action = $result[1];

    echo $controller->$action($router->getParams());
}