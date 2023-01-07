<?php
declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";

use App\Core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [\App\Controllers\AppController::class, 'index']);
$app->router->get('/test', [\App\Controllers\AppController::class, 'testViewFunction']);
$app->router->post('/form', [\App\Controllers\AppController::class, 'handleForm']);
$app->router->get('/form', [\App\Controllers\AppController::class, 'form']);

$app->run();
