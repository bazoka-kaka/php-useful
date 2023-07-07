<?php

class Car
{
  private $color;
  private $weight;

  /**
   * constructor: special function that is automatically called when an object is created
   * destructor: special function that is automatically called when an object is destroyed
   */
  public function __construct($color = 'red', $weight = 2000)
  {
    echo "I am created" . '<br>';
    $this->color = $color;
    $this->weight = $weight;
  }

  public function __destruct()
  {
    echo "I am destroyed: " . $this->color . '<br>';
  }
}

$myCar = new Car('black');
$myCar1 = new Car('green');
echo '<pre>';
var_dump($myCar, $myCar1);
echo '</pre>';

/**
 * by default $myCar1 will be destroyed first then $myCar (bottom to top)
 * manual destruct:
 */
unset($myCar);
