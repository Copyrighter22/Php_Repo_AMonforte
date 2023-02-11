<?php

use Dotenv\Dotenv;
use Framework\App;
use framework\Database\Connection;
use framework\Database\Database;

$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();
// Laravel Service Providers
App::bind('config', require 'config.php');

App::bind('database', new Database(
    Connection::make(App::get('config')['database'])
));