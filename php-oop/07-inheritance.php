<?php

/**
 * inheritance: a way when one class extends the properties and methods of another class
 * - the class that extends these properties is called child class
 * - the class that a child class is inheriting from is called parent class
 * - you can override properties, methods, and consts of a parent in a child class
 * - final keyword means that you can't extend the class to a child class (if defined in class level) or you can't override a method or property (if defined in method or property level)
 * 
 * note:
 * - we can't reduce the visibility of an inherited property of method in a child class but you can improve it e.g: you can change the visibility of an inherited property in a child class from private to protected or even public (this also applies in inherited methods)
 * - you can't change the type hinting or attributes in an inherited method, you can't also decrease the visibility
 */

class ParentClass
{
  public $property1 = '1';
  protected $property2 = '2'; // protected property is available only to the parent, child, and grandchildren classes
  private $property3 = '3'; // private property is only available in its own class, not inherited
  const MY_CONST = 'parent const';

  public function getProperty2(): string
  {
    return $this->property2;
  }

  // public function printText(string $text)
  // {
  //   echo $text;
  // }
}

class ChildClass extends ParentClass
{
  // private $property1 = 'blyat'; // this returns an error: can't decrease the visibility of a property (but if you wanna change a private property for example to protected or public, you can)
  public $property1 = '11'; // this overwrites the earlier property
  public $property2 = '22'; // this overwrites the earlier property (note: you can change this inherited property visibility to public we don't decrease its visibility, instead we increase it)
  const MY_CONST = 'child const'; // overriding inherited const

  /**
   * the method below overwrites the inherited method
   */
  public function getProperty2(): string // you can't change the type hinting or decrease the visibility of an inherited method
  {
    $result = parent::getProperty2();
    return "Something " . $result;
  }

  // public function printText(int $text) // you can't change the inherited method's argument nor can't you change its type hinting
  // {
  //   echo $text;
  // }
}


class Person
{
  public $name;
  protected $age;
  private $phone;

  public function __construct($name, $age, $phone)
  {
    $this->name = $name;
    $this->age = $age;
    $this->phone = $phone;
  }

  public function hello()
  {
    return "Hello from person";
  }

  public final function getAge() // this function (which uses "final" keyword) can't be changed in its child class
  {
    return $this->age;
  }
}

class Employee extends Person
{
  private $salary;

  public function __construct($name, $age, $phone, $salary)
  {
    parent::__construct($name, $age, $phone);
    $this->salary = $salary;
  }

  public function hello()
  {
    return "Hello from $this->name";
  }
}

$employee = new Employee('Benzion', 21, '081217778962', 100000);
echo $employee->hello() . '<br>';
