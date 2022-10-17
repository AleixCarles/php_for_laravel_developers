<?php

class Task{
protected $id;
protected $title;
protected $description;
protected $completed;

/**
* @param $id
* @param $title
* @param $description
* @param $completed
*/
public function __construct($id, $title, $description, $completed)
{
$this->id = $id;
$this->title = $title;
$this->description = $description;
$this->completed = $completed;
}

}