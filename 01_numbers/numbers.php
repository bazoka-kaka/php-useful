<?php
// number checking functions
$a = 21;
echo '<pre>';
var_dump(is_integer($a));
echo '</pre>';

echo '<pre>';
var_dump(is_numeric('12.2'));
echo '</pre>';

// conversion
$strNum = "12.21";
$num = (float)$strNum;
echo '<pre>';
var_dump($num);
echo '</pre>';

// number functions
echo abs(-12) . '<br>';
echo pow(2, 3) . '<br>';
echo sqrt(16) . '<br>';
echo max(2, 3) . '<br>';
echo min(20, 10) . '<br>';
echo round(2.4) . '<br>';
echo ceil(2.2) . '<br>';
echo floor(2.9) . '<br>';

// formatting number
$number = 11323.123;
echo "Rp. " . number_format($number, 2, ',', '.') . '<br>';
