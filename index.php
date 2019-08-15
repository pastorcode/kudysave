<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$baseRoot = getcwd();
$baseLoader = require 'vendor/autoload.php';
$baseLoader = require 'App/routes/Routes.php';
$baseLoader = require 'vendor/codefii/core/src/Network/Debugger/Error.php';
        \php_error\reportErrors();
$router->run();

