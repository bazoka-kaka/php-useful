<?php

// declaring variable
$name = "bazoka-kaka";
$age = 100;

// getting the data type of a variable
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';

// print the whole variable
echo '<pre>';
var_dump($name);
echo '</pre>';

// variable checking functions
echo '<pre>';
var_dump(is_string($name));
echo '</pre>';

echo '<pre>';
var_dump(is_int($age));
echo '</pre>';

// checks if variable is defined
$undefined;
echo '<pre>';
var_dump(isset($undefined));
echo '</pre>';

// constants
define('PI', 3.14);
echo PI;

// checking const variable
echo '<pre>';
var_dump(defined('PI'));
echo '</pre>';

// using PHP built int consts
echo PHP_INT_MAX . '<br>';
