<?php


use App\Patterns\Structural\Proxy\RouterInterface\Clients\Application1;
use App\Patterns\Structural\Proxy\RouterInterface\Clients\Application2;
use App\Patterns\Structural\Proxy\RouterInterface\RouterFactory;
use App\Patterns\Structural\Proxy\RouterInterface\RouterProxy;

require_once __DIR__ . '/../vendor/autoload.php';

$app1 = new Application1(new DateTime('now'));
$app2 = new Application2();

$router = new RouterProxy(
    RouterFactory::createRouter(),
    $app1,
    ['APP_1', 'APP_3', 'APP_4']
);

if ($router->resolve('https://www.google.com')) {
    $router->stream();
}
