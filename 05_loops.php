<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
/*for($x = 0; $x <10; $x++) {
    echo 'Number '.$x.'<br>';
}*/

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
/*$x=1;
while ($x<=15){
    echo 'Number '.$x.'<br>';
    $x++;
}
*/
/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
/*$x=4;
do{
    echo 'Number ' .$x.'<br>';
    $x++;
}while ($x<5);*/


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$post=['first_post','second_post','third_post'];
/*for($x=0;$x<count($post);$x++){
    echo $post[$x];
};*/
/*foreach($post as $index => $item) {
    echo $index . ' - ' . $item. '<br>';
};*/
$people = [ 
   
    
        'first_name' => 'John',
        'last_name' => 'Doe',
   
 ];
 foreach($people as $key => $value) {
    echo $key . ' - ' . $value. '<br>';
};