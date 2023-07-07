<?php

/**
 * PHP provides about 16 magical methods, here we're going to cover about 10 of them
 * all magic methods are executed automatically by PHP engine (not explicitly invoked)
 * __construct(): called when a new object is created
 * __destruct(): called when an object is destroyed
 * __toString(): converts object to string
 * __get(): executed when we're trying to access unexisting property of the object
 * __set(): executed when we're trying to set unexisting property
 * __call(): executed when we're trying to execute unexisting method of the object
 * __callStatic(): executed when we're trying to execute unexisting static method of the object
 * __invoke(): executed when we're calling our instance like a function (executing our object)
 * __sleep(): executed before the serialize() function does its job
 * __wakeup(): executed after the unserialize() function is called
 * __clone(): executed after the cloning is done and is executed on the new object
 * notes:
 * - objects can be serialized and unserialized (e.g: converted into string, saved into database, then converted back into object)
 * - serialize() checks if we have __sleep() magic method, if it does exist prior to the serialization, we should return the area of properties we want to include in serialization, we can also do some cleanup work in our __sleep() method before the actual serialization
 * - example of wakeup(): suppose you have connection to db in your Database class, you may need to unset connection resource and clean up the resources in __sleep() method then reconnect in the __wakeup() method
 * - by serializing an instance then unserializing it, we bassically clone the object (even without calling the __sleep() and __wakeup() methods)
 */

class Person
{
  private $name;
  private $phone;

  public function __construct($name, $phone)
  {
    $this->name = $name;
    $this->phone = $phone;
    echo "__construct is called" . '<br>';
  }

  public function __destruct()
  {
    echo "__destruct is called" . '<br>';
  }

  public function __toString()
  {
    return "Name: " . $this->name . ', Phone: ' . $this->phone . '<br>';
  }

  public function __get($propName)
  {
    if ($propName == 'username') {
      return $this->name;
    }
    throw new Exception("Property \"$propName\" doesn't exist!");
  }

  public function __set($propName, $value)
  {
    if ($propName == 'username') {
      $this->name = $value;
      return;
    }
    throw new Exception("Property doesn't exist!");
  }

  public function getPhone()
  {
    return $this->phone;
  }

  public function setPhone($phone)
  {
    $this->phone = $phone;
  }

  public function __call($name, $arguments)
  {
    if ($name == 'getMobilePhone') {
      return $this->getPhone();
    } else if ($name == 'setMobilePhone') {
      call_user_func_array([$this, 'setPhone'], $arguments);
    }
  }

  public static function __callStatic($name, $arguments)
  {
    echo "\"$name\" method was called!" . '<br>';
  }

  public function __invoke()
  {
    return "Object was called as a function";
  }

  public function __sleep()
  {
    unset($this->phone); // we don't wanna include $this->phone in serialization
    return ['name'];
  }

  static $counter = 0;
  public function __wakeup()
  {
    self::$counter++;
    echo "I am waking up" . '<br>';
  }

  public function __clone()
  {
    self::$counter++;
  }
}

$person = new Person("Benjamin", 812719);
echo $person;
$person->username = 'Benjamin'; // calling __set()
echo $person->username . '<br>'; // calling __get()
// echo $person->age . '<br>'; // calling __get() --> will trigger an error
$person->setMobilePhone(801211); // calling __call()
echo $person->getMobilePhone() . '<br>'; // calling __call()
Person::hello(); // calling __callStatic()
echo '<pre>';
var_dump(is_callable($person)); // checking if $person instance is callable
echo '</pre>';
echo $person() . '<br>'; // calling __invoke()

$serialized = serialize($person);
echo  $serialized . '<br>';
$newPerson = unserialize($serialized); // this is a different object than $person
echo '<pre>';
var_dump($newPerson);
echo '</pre>';

/**
 * below codes keep track how many Person being cloned
 * note:
 * serialize then unserialize will create new clone
 */
$person2 = clone $person;
$person3 = clone $person;
$serialized = serialize($person);
$person4 = unserialize($serialized);
echo Person::$counter . '<br>';
echo '<pre>';
var_dump($person, $newPerson, $person2, $person3, $person4);
echo '</pre>';
