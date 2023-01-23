<?php

use App\Models\Task;

function greet(){
$name = htmlspecialchars($_GET['name']);
$cognom = htmlspecialchars($_GET['cognom']);

return "Hola $name $cognom ";
}

function dd($xivato)
{
    var_dump($xivato);
    die();
}
function fetchAllTask($dbh){
    $statement = $dbh->prepare('SELECT * FROM tasks;');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, Task::class);

}
