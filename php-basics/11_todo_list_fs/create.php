<?php

if (isset($_POST['todo'])) {
  if (file_exists(__DIR__ . '/todos.json')) {
    $jsonData = file_get_contents(__DIR__ . '/todos.json');
    $todos = json_decode($jsonData, true);
  } else {
    $todos = [];
  }
  $newtodo = stripslashes(htmlspecialchars($_POST['todo']));
  $todos[$newtodo] = [
    'completed' => false
  ];
  file_put_contents(__DIR__ . '/todos.json', json_encode($todos, JSON_PRETTY_PRINT));
}

header('Location: index.php');
