<?php
// string functions
$name = "   bazoka-kaka   ";
echo strlen($name) . '<br>';
echo trim($name) . '<br>';
echo ltrim($name) . '<br>';
echo rtrim($name) . '<br>';
echo str_word_count($name) . '<br>';
echo strrev($name) . '<br>';
echo strtoupper($name) . '<br>';
echo strtolower($name) . '<br>';
echo ucfirst($name) . '<br>';
echo lcfirst($name) . '<br>';
echo ucwords($name) . '<br>';
echo strpos($name, 'kaka') . '<br>';
echo stripos($name, 'KAKA') . '<br>';
echo substr($name, 8) . '<br>';
echo str_replace('kaka', 'bradley', $name) . '<br>';
echo str_ireplace('BAZOKA', 'rifle', $name) . '<br>';

$number = 100;
$number1 = 123456;
echo str_pad($number, 8, '0', STR_PAD_LEFT) . '<br>';
echo str_pad($number, 8, '0', STR_PAD_LEFT) . '<br>';
echo str_repeat("world", 3) . '<br>';

// multiline text and line breaks
$longText = "
  Hello, My name is <b>bazoka-kaka</b>
  I'm 27,
  I love my wife
";
echo $longText . '<br>';
echo nl2br($longText) . '<br>';
echo htmlentities($longText) . '<br>';
echo nl2br(htmlentities($longText)) . '<br>';
echo nl2br(html_entity_decode(htmlentities($longText))) . '<br>';
echo htmlspecialchars($longText) . '<br>';
