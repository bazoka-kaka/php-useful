<?php
$fruits = ["Banana", "Orange", "Watermelon"];

// append element
$fruits[] = "Peanut";

// returns the array's length
echo count($fruits) . '<br>';

// adds element at the end of the array
array_push($fruits, 'Mango', 'Papaya');

// removes element from the end of the array
$last_element = array_pop($fruits);

echo $last_element . '<br>';

// adds element at the beginning of the array
array_unshift($fruits, $last_element);

// removes element from the beginning of array
$first_element = array_shift($fruits);

echo $first_element . '<br>';

// split the string into array
$str = "Banana,Apple,Papaya";
echo '<pre>';
var_dump(explode(',', $str));
echo '</pre>';

// combine array into string
echo implode(',', $fruits) . '<br>';

// check if element exists in array
echo '<pre>';
var_dump(in_array('Banana', $fruits));
echo '</pre>';

// search element index in array
echo '<pre>';
var_dump(array_search('Banana', $fruits));
echo '</pre>';

// merge two arrays
$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';

// sorting array
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// reverse sorting an array
rsort($fruits);

// sorting that returns callback
// usort($fruits);

// filter, map, and reduce
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$evens = array_filter($numbers, fn ($n) => $n % 2 === 0);
$squares = array_map(fn ($n) => $n * $n, $numbers);
$total = array_reduce($numbers, fn ($carry, $item) => $carry + $item);
