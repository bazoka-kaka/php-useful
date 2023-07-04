<?php
// print current timestamp
echo time() . '<br>';

// print current date
echo date('Y-m-d H:i:s', time()) . '<br>';

// print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';

// different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s', time()) . '<br>';

// string to timestamp
echo strtotime('now') . '<br>';
echo strtotime('+1 day') . '<br>';
echo strtotime('+1 week') . '<br>';

// function date parse: https://www.php.net/manual/en/function.date-parse.php
$dateStr = '2020-02-06 12:23:00';
$parseDate = date_parse($dateStr);
echo '<pre>';
var_dump($parseDate);
echo '</pre>';

// parse date from format
$dateStr = "February 4 2020 12:45:20";
$parseDate = date_parse_from_format('F j Y H:i:s', $dateStr);
echo '<pre>';
var_dump($parseDate);
echo '</pre>';
