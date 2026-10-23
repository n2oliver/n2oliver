<?php

include __DIR__ . '/../load-env.php';
include __DIR__ . '/DBSessionHandler.php';

try {
    $pdo = new PDO(
        "mysql:host=" . getenv('DB_HOST') .
        ";port=" . getenv('DB_PORT') .
        ";dbname=" . getenv('DB_NAME'),
        getenv('DB_USER'),
        getenv('DB_PASS'),
        [
            \Pdo\Mysql::ATTR_INIT_COMMAND => "SET NAMES utf8",
            \Pdo\Mysql::ATTR_USE_BUFFERED_QUERY => true,
        ]
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $pdo->setAttribute(
        PDO::ATTR_ORACLE_NULLS,
        PDO::NULL_EMPTY_STRING
    );

    $handler = new DBSessionHandler($pdo);

    session_set_save_handler($handler, true);
    session_start();

} catch (PDOException $e) {
    error_log('Erro ao conectar ao banco: ' . $e->getMessage());
    http_response_code(500);
    echo 'Erro ao conectar ao banco!';
}