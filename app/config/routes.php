<?php
use app\models\ObjectExchange;
use app\controllers\ObjectExchangeController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/**
 * @var Router $router
 * @var Engine $app
 */

$router->group('', function(Router $router) use ($app) {

    $ObjectExchangeController = new ObjectExchangeController($app);

    $router->get('/', function() use ($app) {
        $app->render('model.php', ['page' => 'home.php']);
    });

    $router->get('/ride/list-objets', function() use ($app) {
        $app->render('model.php', ['page' => 'list-objets.php']);
    });

}, [SecurityHeadersMiddleware::class]);