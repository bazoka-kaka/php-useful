<?php

class Car
{
  public $color = 'red';
  public $weight;
  public $year;
}

$car = new Car();

$car2 = $car; // $car2 and $car points to the same memory
$car2 = null; // $car will still point to the previous memory while $car2's value will be null
$car->color = 'red';

$car3 = clone $car; // cloning (creating copy)
$car3->color = 'green';

echo '<pre>';
var_dump($car, $car2, $car3);
echo '</pre>';
