<?php
require './vendor/autoload.php';
require './config/config.php';

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) use ($route_conf){
    App\Routes::getRoutes($r, $route_conf);
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$pos = strpos($uri, '?');
if ($pos !== false) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo 'Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = explode('.', $routeInfo[1]);
        $controller = "App\\Controller\\" . $handler[0];
        $action = $handler[1];
        $params = $routeInfo[2];

        echo call_user_func_array([new $controller, $action], $params);
        break;
}