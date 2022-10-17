<?php

function greet()
{
$name = htmlspecialchars($_GET['name']);
$surname = $_GET['surname'];

return "Holaa $name $surname !";
}