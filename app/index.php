<?php

use Framework\App;

$tasks = App::get('database')->selectAll('tasks');
//$tasks = Task::selectAll('tasks');

$greeting = greet();

