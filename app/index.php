<?php

use Framework\App;
use framework\Database\Database;


require 'app/helpers.php';


$database = new Database(App::get('config')); // Laravel no utilitzem mai new -> DI i Container
$tasks = Database::make()->selectAll('tasks');

//$tasks = Database::selectAll('tasks'); // Crida estàtica -> sense new
//$task = Task::selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();

