<?php

class Car
{
  public $color;
  public $manufacturer;

  const MANUFACTURER_TOYOTA = "toyota";
  const MANUFACTURER_HONDA = "honda";
  const MANUFACTURER_MAZDA = "mazda";

  const COLOR_RED = 'red';
  const COLOR_GREEN = 'green';
  const COLOR_BLUE = 'blue';

  public function __construct($manufacturer, $color)
  {
    $this->manufacturer = $manufacturer;
    $this->color = $color;
  }
}

$myCar = new Car(Car::COLOR_BLUE, Car::MANUFACTURER_HONDA);
echo '<pre>';
var_dump($myCar);
echo '</pre>';
