<?php

class Car
{
  private $color = 'white';
  public $weight;
  private $year;
  private $allowedColors = ['red', 'black', 'white'];

  /**
   * methods in objects are public by default
   * good practice: type the visibility (public, private, or protected)
   */
  public function setYear($year)
  {
    $this->year = $year;
  }

  public function getYear()
  {
    return $this->year;
  }

  public function setColor($color)
  {
    if (in_array($color, $this->allowedColors)) {
      $this->color = $color;
    }
  }

  public function getColor()
  {
    return $this->color;
  }
}

$myCar = new Car();
$myCar->setColor('red'); // this is gonna change the color since it exists in $allowedColors
$myCar->setColor('yellow'); // this is not gonna change the color since it doesn't exists in $allowedColors

echo $myCar->getColor() . '<br>';
$myCar->setYear(2000);
echo $myCar->getYear() . '<br>';
