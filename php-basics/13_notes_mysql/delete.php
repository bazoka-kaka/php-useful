<?php

$connection = require_once __DIR__ . '/Connection.php';

$id = stripslashes(htmlspecialchars($_GET['id']));
$connection->deleteNote($id);

header("Location: index.php");
