<?php
$age = null;

// null coalescing operator
$myAge = $age ? $age : 18;
$myAge = $age ?: 18;

// null coalescing assignment operator
$person = [
  // 'name' => 'bazoka-kaka'
];
if (!isset($person['name'])) {
  $person['name'] = 'Anonymous';
}
$person['name'] ??= 'Anonymous';
echo '<pre>';
var_dump($person);
echo '</pre>';
