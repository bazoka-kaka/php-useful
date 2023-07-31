<?php

if (isset($_POST['todo'])) {
  $jsonData = file_get_contents(__DIR__ . '/todos.json');
  $todos = json_decode($jsonData, true);
  $todoname = stripslashes(htmlspecialchars($_POST['todo']));
  unset($todos[$todoname]);
  file_put_contents(__DIR__ . '/todos.json', json_encode($todos, JSON_PRETTY_PRINT));
}

header('Location: index.php');
