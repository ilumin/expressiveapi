<?php
// ini_set('opcache.enable', '0');

use Zend\Expressive\AppFactory;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$app = AppFactory::create();

$app->get('/test-param/{name}', function ($request, $response, $next) {
    $response->getBody()->write('Hello, ' . $request->getAttribute('name'));
    return $response;
});

$app->pipeRoutingMiddleware();
$app->pipeDispatchMiddleware();

$app->run();
