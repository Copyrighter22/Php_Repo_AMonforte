<?php
//var_dump($_GET['name']);
//$name = 'Andreu';

//API
function greet(){
    $name = htmlspecialchars($_GET['name']);
    $cognom = htmlspecialchars($_GET['cognom']);

    return "Hola $name $cognom ";
}

$greeting = greet();
