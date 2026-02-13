<?php
use app\models\ObjectExchange;
use app\models\User;
use app\controllers\ObjectExchangeController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/**
 * @var Router $router
 * @var Engine $app
 */

$router->group('', function(Router $router) use ($app) {

    $ObjectExchangeController = new ObjectExchangeController($app, new ObjectExchange());
    $UserObjectController = new ObjectExchangeController($app, new User());

    $router->get('/', function() use ($app) {
        $app->render('layout.php', ['page' => 'home.php']);
    });

    $router->get('/exchange/list-objets', function() use ($app) {
        $app->render('layout.php', ['page' => 'list-objets.php']);
    });

    $router->get('/exchange/list-users', function() use ($app) {
        $app->render('layout.php', ['page' => 'list-users.php']);
    });

}, [SecurityHeadersMiddleware::class]);