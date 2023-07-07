<?php

class Car
{
  public $color = 'red';
  private $weight = 2000;

  public static $counter = 0;
  public $myCounter = 0;

  /**
   * static properties belong to the class, not the instance
   * $counter is updated to prev $counter + 1 everytime __construct() function is called
   * $myCounter is updated to 1 everytime __construct() function is called
   */
  static private $availableColors = [
    'red', 'green', 'blue', 'white'
  ];

  public function __construct()
  {
    self::$counter++;
    $this->myCounter++;
  }

  static public function getAvailableColors()
  {
    return self::$availableColors;
  }
}

$myCar = new Car();
$myCar2 = new Car();

echo $myCar->myCounter . '<br>';
echo $myCar2->myCounter . '<br>';
echo Car::$counter . '<br>';

echo '<pre>';
var_dump(Car::getAvailableColors());
echo '</pre>';
