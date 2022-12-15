<?php

require 'app/helpers.php';
require 'app/Task.php';

$usuario = 'debian-sys-maint';
$contrasena = 'uLBXukzuZ2vnLyQ7';

try{
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $usuario, $contrasena);
}catch (\Exception $e){
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM task;');

$statement->execute();

$task = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');


$greeting = greet();
