<?php
function greet(){
$name = htmlspecialchars($_GET['name']);
$cognom = htmlspecialchars($_GET['cognom']);

return "Hola $name $cognom ";
}