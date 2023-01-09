<?php
require 'config.php';

require 'app/helpers.php';

require 'app/Task.php';
//connect -> API nom connect, sense parametres entrada i tornara objecte $dbh
$dbh = connectDB($config);

$statement = $dbh->prepare('SELECT * FROM task;');

$statement->execute();

$task = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

$greeting = greet();
