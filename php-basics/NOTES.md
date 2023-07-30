# PHP Basics

## Table of Contents

- What is PHP?
- Why should you learn PHP?
- Output "Hello World"
- Variables and data types
- Number / string functions
- Array -- functions
- Conditionals (if - else, else if, switch)
- Loops (while, do - while, for, foreach)
- Functions
- Comments
- Superglobals: $\_SERVER, $\_POST, $GET, $SESSION, $COOKIES
- Form validation -- registration form
- Uploading files
- Including files
- OOP
- Working with file system -- Todo app
- MySQL -- notes app
- Autoloading -- composer
- Setup apache

## Prerequisites

- HTML
- Basic programming (optional)
- CSS (optional)
- Javascript (optional)

## What is PHP?

- First version of PHP was launched by Rasmus Lerdorf in 1994
- PHP - PHP: Hypertext Preprocessor
- Open source general-purpose scripting language
- Server side language
- Best suited for web development
- Can be embedded in HTML
- Intepreted language

## Sessions & Cookies

- makes it possible to store information about the user on the browser or server
- both have similar purpose
- you must start your session before any html codes

### Difference

- cookies store information on the browser
- sessions store information on the server side

### How it works?

- when session is created and that information is stored on the server side, the session id will be stored in the cookie
- based on the session id which is exchanged every request and response, the server can know who the browser is (that gives the possibility to associate the data saved to that particular user based on the session id)
- in short: session id is the unique identifier (connection) between browser and server session

### Cookies

- a piece of data stored in user browser
- mainly used for 3 purposes:
  1. session management
  2. personalization
  3. tracking
- constraints:
  - max 4 kb
  - not best suited for sensitive informations (secure datas are for sessions)

## Require and Include

- we have 4 things:
  1. require
  2. require_once
  3. include
  4. include_once

### Include vs require

- include: if the file doesn't exist or contain some error, the rest of the code still works
- require: if the file doesn't exist or contain some error, the program execution will be stopped

### Include once

- if the file is included already, it won't be included anymore given another include in the code
  e.g:

  ```
  include_once [file1];
  include [file1];
  include_once [file1];
  ```

  note: the above code would only include \[file1\] once

### Require once

- the same with include once, just it's "require"
  e.g:

  ```
  require [file1];
  require [file1];
  ```

  note: the above code will return an error

  ```
  require_once [file1];
  require_once [file1];
  ```

  note: the above code will not return an error
