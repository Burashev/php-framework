<?php
declare(strict_types=1);

use Den\Application;

$rootDir = dirname(__DIR__);

require $rootDir . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable($rootDir);
$dotenv->load();

$config = [
    "db" => [
        "dsn" => "mysql:host={$_ENV["DB_SERVER"]};port={$_ENV["DB_PORT"]};dbname={$_ENV["DB_NAME"]}",
        "username" => $_ENV["DB_USER"],
        "password" => $_ENV["DB_PASSWORD"],
    ]
];

$app = new Application($rootDir, $config);

// Routes
require_once $rootDir . "/routes/web.php";

$app->run();
