<?php

class Task{
    protected $id;
    protected $title;
    protected $description;
    protected $completed;

    public function __construct($id,$completed,$description,$title)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->completed = $completed;

    }
}

$task = new Task(1,0,'a la panaderia','Compra el pa');
var_dump($task);

//API
function greet(){
    $name = htmlspecialchars($_GET['name']);
    $cognom = htmlspecialchars($_GET['cognom']);

    return "Hola $name $cognom ";
}

$greeting = greet();
