<?php

    use Model\ActiveRecord;

    require __DIR__ . '/../vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->safeLoad();
    
    require 'database.php';
    require 'funciones.php';
    ActiveRecord::setDB($db);

?>