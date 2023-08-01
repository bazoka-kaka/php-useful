<?php

$connection = require_once __DIR__ . '/Connection.php';

$connection->removeNote($_POST['id']);
header("Location: index.php");
