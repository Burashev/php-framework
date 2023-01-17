<?php
declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";

use App\Controllers\AppController;
use App\Controllers\AuthController;
use Den\Application;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    "db" => [
        "dsn" => "mysql:host={$_ENV["DB_SERVER"]};port={$_ENV["DB_PORT"]};dbname={$_ENV["DB_NAME"]}",
        "username" => $_ENV["DB_USER"],
        "password" => $_ENV["DB_PASSWORD"],
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [AppController::class, 'index']);
$app->router->get('/test', [AppController::class, 'testViewFunction']);
$app->router->post('/form', [AppController::class, 'handleForm']);
$app->router->get('/form', [AppController::class, 'form']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'handleLogin']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'handleRegister']);

$app->run();
