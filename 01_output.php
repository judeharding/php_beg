
<?php
  echo 'hello from php';

  /* -------- Output & Comments ------- */



/*

  echo prints a single or multiple things to the screen but has NO return value

  print prints to the screen and HAS a return value of 1

  The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

  print_r = prints arrays print_r([1, 2, 3]);

  var_dump returns more info like var_dump('hello') returns hello and string(datatype)

  var_export('hello') will print 'hello' WITH THE QUOTES


  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/


?>






<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>hello from doctype</h1>
  
</body>
</html>