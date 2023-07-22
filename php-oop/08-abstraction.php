<?php

/**
 * ABSTRACTION 101
 * ===============
 * - abstraction is related to inheritance, but there's one big difference: abstract class can have methods without body (parent class (the abstract class) knows what should be done but doesn't know how it should be done (it's the children's duty))
 * - all parent's abstract methods must be redeclared in children's classes (args must be the same)
 * - children's methods could have additional default args with default values (not existing in parent's method args)
 * - methods' signature must be the same (if abstract classes use typehinting for arguments or return values, you need to also do the same in the child class)
 * - visibility of the methods of children classes must be the same or less restricted than their parent class
 * - objects can't be created from abstract classes directly
 */

abstract class Shape
{
  public $color;

  /**
   * good practice: abstract methods on the top, real methods after
   */
  abstract public function getArea(): float;

  public function __construct($color)
  {
    $this->color = $color;
  }


  public function getColor()
  {
    return $this->color;
  }
}

class Triangle extends Shape
{
  public function getArea(): float
  {
    return 0;
  }
}

class Circle extends Shape
{
  private $radius;
  const PI = 3.14;

  public function __construct($color, $radius)
  {
    parent::__construct($color);
    $this->radius = $radius;
  }

  public function getArea(): float
  {
    return self::PI * $this->radius * $this->radius;
  }
}

class Rectangle extends Shape
{
  private $width;
  private $length;

  public function __construct($color, $width, $length)
  {
    parent::__construct($color);
    $this->width = $width;
    $this->length = $length;
  }

  public function getArea(): float
  {
    return $this->width * $this->length;
  }
}

$t = new Triangle('red');
$c = new Circle('blue', 7);
$r = new Rectangle('yellow', 5, 10);
echo '<pre>';
var_dump($r->getArea());
echo '</pre>';
