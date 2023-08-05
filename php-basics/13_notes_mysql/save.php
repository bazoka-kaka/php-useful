<?php

$connection = require_once __DIR__ . '/Connection.php';

$id = post_data('id');
$title = post_data('title');
$description = post_data('description');

if ($id) {
  $connection->updateNote($id, $title, $description);
} else {
  $connection->createNote($title, $description);
}

header("Location: index.php");

function post_data($field)
{
  $_POST[$field] = $_POST[$field] ? $_POST[$field] : "";
  return stripslashes(htmlspecialchars($_POST[$field]));
}
