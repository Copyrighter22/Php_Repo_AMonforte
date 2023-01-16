<?php
require 'config.php';

require 'app/helpers.php';

require 'app/Task.php';
//connect -> API nom connect, sense parametres entrada i tornara objecte $dbh
$task =fetchAllTask(connectDB($config));

$greeting = greet();
