<?php

use framework\Database\Database;

require 'config.php';

require 'app/helpers.php';

//connect -> API nom connect, sense parametres entrada i tornara objecte $dbh
//$tasks =fetchAllTask(connectDB($config));

// WISHFUL PROGRAMMAING
$database = new Database($config); // Laravel no utilitzem mai new -> DI i Container
$tasks = $database->selectAll('tasks');

//$tasks = Database::selectAll('tasks'); // Crida estàtica -> sense new
//$task = Task::selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();

