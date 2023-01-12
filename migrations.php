<?php
declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

use App\Core\Application;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    "db" => [
        "dsn" => "mysql:host={$_ENV["DB_SERVER"]};port={$_ENV["DB_PORT"]};dbname={$_ENV["DB_NAME"]}",
        "username" => $_ENV["DB_USER"],
        "password" => $_ENV["DB_PASSWORD"],
    ]
];

$app = new Application(__DIR__, $config);

$options = getopt('', ['migrate::', 'rollback::']);

if (count($options) > 1 || count($options) === 0) {
    die("The number of arguments is incorrect." . PHP_EOL
        . "Correct syntax for migration: migrations.php --migrate" . PHP_EOL
        . "Correct syntax for rollback: migrations.php --rollback"
    );
    // TODO: Make numbers of migration for migrate or rollback
}

if (array_key_exists('migrate', $options)) {
    $app->db->applyMigrations();
}
elseif (array_key_exists('rollback', $options)) {
    $app->db->rollbackMigrations();
}


