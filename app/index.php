<?php

class Task{

}
//var_dump($_GET['name']);
//$name = 'Aleix';
//API
function greet()
{
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];

   return "Hola $name $surname !";
}
$greeting= greet();
//$greeting = 'Hola ' . $_GET['name'] . '!';