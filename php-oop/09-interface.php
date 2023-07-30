<?php

/**
 * interface 101:
 * - interfaces allow you to define method signature without body and force the class to implement the method
 * - an interface is provided so you can describe a set of functions and hide the final implementation of those functions in an implementing class. This allows you to change the IMPLEMENTATION of those functions without changing how you use it.
 * - all methods in interface MUST be PUBLIC
 * - you can only extend from 1 abstract class, but you can implement more than 1 interfaces (multiple interfaces)
 * - interfaces can extend each other
 * 
 * differences between abstract and interface:
 * - abstract classes can have normal methods with body, interfaces can't
 * - abstract classes can have protected methods, interfaces can't
 * - you can only extend from 1 abstract class, but you can implement more than 1 interfaces (multiple interfaces)
 */

interface MyInterface
{
  /**
   * interface could have const but the const can't be implemented
   */
  const MY_CONST = 1;
  public function __construct();
  public function method1();
  public function method2();
}

/**
 * you must implement all of the methods of an interface in your implemented class
 */
class MyClass implements MyInterface
{
  // const MY_CONST = 2; // overriding interface const is not supposed to work
  public function __construct()
  {
  }

  public function method1()
  {
  }

  public function method2()
  {
  }
}

/**
 * you can implement the interface without implementing the method of that interface using an abstract class
 */
abstract class MyAbstractClass implements MyInterface
{
  public function method2()
  {
  }
}

/**
 * you have to implement all the methods of an interface implemented in your parent class if it's not implemented yet in that parent (abstract class)
 */
class MyClass1 extends MyAbstractClass
{
  public function __construct()
  {
  }

  public function method1()
  {
  }
}


// echo MyInterface::MY_CONST; // this is valid
$myClass = new MyClass();

/**
 * multiple interfaces:
 * - you can have more than 1 interfaces implemented in one class
 * - if you have the same methods in different interfaces that you implement, it's fine as long as the return type is also the same or both doesn't have returns, but if they aren't it'll return an error
 * 
 */
interface MyInterface1
{
  public function method1();
  // public function method2(): string; // this is not okay
  public function method3(); // this is okay
}

interface MyInterface2
{
  // public function method2(): int; // this is not okay
  public function method3(); // this is okay
}

class MyClass3 implements MyInterface1, MyInterface2
{
  public function method1()
  {
  }

  public function method3()
  {
  }
}

/**
 * extending interfaces:
 * - interface can extend each other
 * - interface can extend from more than 1 parent interface
 */
interface ParentInterface
{
  public function method1();
}

interface ParentInterface1
{
  public function method2();
}

// multiple interfaces extends
interface ChildInterface extends ParentInterface, ParentInterface1
{
  public function method3();
}

class MyClass4 implements ChildInterface
{
  public function method1()
  {
  }

  public function method2()
  {
  }

  public function method3()
  {
  }
}
