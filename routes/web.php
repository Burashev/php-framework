<?php
declare(strict_types=1);

use App\Controllers\AppController;
use Den\Application;

$router = Application::$app->router;

$router->get('/', [AppController::class, 'index']);
$router->get('/test', function () {
    return "callback param example";
});
