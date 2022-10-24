<?php

require 'app/helpers.php';
require 'app/Task.php';

/*$task = new Task(1,'comprar pa','a la panaderia',0);

var_dump($task);*/
//var_dump($_GET['name']);
//$name = 'Aleix';
//API
$user = 'debian-sys-maint';
$pass = '177T1LYP3oL4c6Ey';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user,$pass);
} catch (Exception $e){
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

$greeting= greet();
