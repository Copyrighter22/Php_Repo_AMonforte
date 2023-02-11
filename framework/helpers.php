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

