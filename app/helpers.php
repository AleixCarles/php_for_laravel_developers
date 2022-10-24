<?php

function greet()
{
$name = htmlspecialchars($_GET['name']);
$surname = $_GET['surname'];

return "Holaa $name $surname !";
}

function dd($xivato)
{
    var_dump($xivato);
    die();
}


function connectDB($config){ //Injectem dependencia

    try {
        return new PDO(
            $config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'],
            $config['database']['user'],
            $config['database']['password']);
    } catch (Exception $e) {
        echo 'Error de connexió a la base de  dades';
    }

}
function fetchAllTasks($dbh){

    $statement = $dbh->prepare('SELECT * FROM tasks;');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}