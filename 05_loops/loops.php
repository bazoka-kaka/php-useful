<?php
// foreach
$fruits = ['banana', 'orange', 'apple'];
foreach ($fruits as $i => $fruit) {
  echo $i . ' ' . $fruit . '<br>';
}

$person = [
  'name' => 'bazoka-kaka',
  'age' => 21,
  'job' => 'Programmer'
];
foreach ($person as $key => $val) {
  echo $key . ': ' . $val . '<br>';
}
