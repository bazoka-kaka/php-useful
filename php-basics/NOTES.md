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
