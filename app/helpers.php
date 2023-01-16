<?php
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
    $statement = $dbh->prepare('SELECT * FROM task;');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}

function connectDB($config){
    try{
        return new PDO( $config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'],
            $config['database']['user'],
            $config['database']['password']);
    }catch (\Exception $e){
        echo 'Error de connexió a la base de dades';
    }
}