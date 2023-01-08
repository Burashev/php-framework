<?php
declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";

use App\Controllers\AppController;
use App\Controllers\AuthController;
use App\Core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [AppController::class, 'index']);
$app->router->get('/test', [AppController::class, 'testViewFunction']);
$app->router->post('/form', [AppController::class, 'handleForm']);
$app->router->get('/form', [AppController::class, 'form']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'handleLogin']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'handleRegister']);

$app->run();
