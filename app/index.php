<?php

require 'app/helpers.php';
require 'app/Task.php';
require 'config.php';



$dsn = $config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'];

//connect -> API nom connect, sense parametres entrada i tornara objecte $dbh
try{
    $dbh = new PDO($dsn, $config['database']['user'], $config['database']['password']);
}catch (\Exception $e){
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM task;');

$statement->execute();

$task = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

$greeting = greet();
