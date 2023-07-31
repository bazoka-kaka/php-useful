<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Student.php';

$zura = new Person('Zura', 21, 1000);
echo $zura->name . '<br>';
echo $zura->age . '<br>';
echo $zura->getSalary() . '<br>';

$benzion = new Student("Benzion", 21, 1);
echo $benzion->getStdId() . '<br>';
