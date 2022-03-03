<?php

use BaseLinkerNts\AppContainer;
use BaseLinkerNts\Log\AppLogger;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Routing\RouteCollection;

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');

$logger = new AppLogger('baseLinker_nts');

$loader = new YamlFileLoader(new FileLocator(__DIR__ . '/../config'));
$routes = new RouteCollection();
$routes->addCollection($loader->import('routes.yml'));

$request = Request::createFromGlobals();

try {
    $container = new AppContainer($routes);
    $container->compile(true);

    $kernel = $container->get('app.kernel');
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);
} catch (Exception $e) {
    $logger->error("index: " . $e->getMessage());
}