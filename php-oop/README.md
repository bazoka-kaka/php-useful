# Object Oriented Programming

## 4 Pillars of OOP

1. Encapsulation
2. Abstraction
3. Inheritance
4. Polymorphism

## Procedural Programming

- Before object oriented programming
- consists of functions and variables
- too much interdependencies for functions = spaghetti code

## Object Oriented Programming

- combining a group of related variables and functions into a unit (the unit is called an object)
- variables in object are called properties
- functions in object are called methods

## Benefits of OOP

1. Encapsulation
   - reduce complexity + increase reusability
2. Abstraction
   - reduce complexity + isolate impact of changes
3. Inheritance
   - eliminate redundant code
4. Polymorphism
   - refactor ugly switch/case or if/else statements

## Explanation of 4 Pillars of OOP

### 1. Encapsulation

- the variables and functions which have high relations are encapsulated within one object
- the good thing:
  don't have to write a lot of parameters (bad practice from procedural programming)

e.g:

```
let employee = {
  baseSalary: 30_000,
  overtime: 10,
  rate: 2,
  getWage: function() {
    return this.baseSalary + (this.overtime * this.rate);
  }
}
```

note: notice that the function doesn't have any parameters

### 2. Abstraction

- the practice of hiding some properties and functions of an object from the outside
- benefits:
  - simpler interface
  - reduce the impact of change
    e.g: when we change the inner / private methods none of these changes will leak to the outside (no need to change the outside at all)

### 3. Inheritance

- a mechanism that eliminates redundant code by reusing the same code for multiple "child" objects
- e.g: children (textbox, select, checkbox) has common attributes (hidden, innerHTML) and methods (click(), focus())

### 4. Polymorphism

- Terminology: Poly (Many) morph (forms) --> many forms
- allows our program to get rid of long switch or if else statements
- e.g: children (textbox, select, checkbox) has common attributes (hidden, innerHTML) and methods (click(), focus()) but each children has its own unique ways to be rendered
  if we want to render these unique inherited elements in procedural way it may looks like this:

```
switch(...) {
  case 'select': renderSelect();
  case 'text': renderText();
  case 'checkbox': renderCheckbox();
  case ...
  case ...
  case ...
}
```

with object oriented programming's implementation of polymorphism we could do it this way

```
let element = new textBox(...);
let textBox = {
  render();
  ...
}
let select = {
  render();
  ...
}
let checkBox = {
  render();
  ...
}
// we can just do it like this instead of using a long switch case
element.render();
```

## Class and instance

- class is a blueprint which has associated variables (properties) and functions (methods)
- class could also be considered a data type
- the variable that is made out of a class is called instance
