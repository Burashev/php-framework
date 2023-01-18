<?php
declare(strict_types=1);

use Den\Application;

return new class {
    function up() {
        Application::$app->db->PDO->exec("
            create table users
            (
                id int auto_increment primary key,
                name     varchar(255) not null,
                surname  varchar(255) not null,
                email    varchar(255) not null,
                password varchar(255) not null
            ) collate = utf8mb4_unicode_ci;
        ");
    }

    function down() {
        Application::$app->db->PDO->exec("drop table if exists users;");
    }
};
