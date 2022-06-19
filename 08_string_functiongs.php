<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/
$strings ='hello world';
// get the length of the string
echo strlen($strings);
// find the position of the first occurrence of the a substring in a string
echo strpos($strings,'w');
// find the position of the last occurrence of the a substring in a string
echo strrpos($strings,'o');
//reverse the string
echo strrev($strings);
//convert all characters to lowercase
echo strtolower($strings);
//convert all characters to uppercase
echo strtoupper($strings);
//uppercase the first character of the each word
echo ucwords($strings);
//string replace 
echo str_replace('world','everyone',$strings);
//return portion of a string specified by the offset and length
echo substr($strings,0,5);
echo substr($strings,5);
// starts with
/*if(str_starts_with($strings,'hello')) {
    echo 'yes';
};*/

  //html entities
  $strings2='<h1>helloworld</h1>';
  echo $strings2;
  echo htmlentities($strings2);
  echo htmlspecialchars($strings2);
  // formatted strings - useful when you have outside data
  //different specifiers for different data types
  printf('%s is a %s','Brad','nice guy');
  printf('1+1=%f',1+1);