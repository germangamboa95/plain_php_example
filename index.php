<?php




require __DIR__ . '/vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();

$app = new \App\Core\Main();

$app->loadRoutes();

$app->processRequest();
