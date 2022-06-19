<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */
/*$age=12;
if($age>=18){
    echo 'You are old enough to vote';
}else{
    echo 'Sorry,You are not old enough to vote';
};*/

/*$t = date("H");
if($t<12){
    echo 'good morning';
}else if($t<17){
    echo 'good afternoon';
}else if($t>17){
    echo 'good evening';
};*/
/*$posts = [];
$first_post =!empty($posts) ? $posts[0] :null;
echo $first_post;*/
$favcolor='';
switch ($favcolor){
    case 'red':
        echo 'you color is red';
        break;
    case 'blue':
        echo 'you color is blue';
        break;
    case 'green':
        echo 'you color is green';
        break;
    default:
    echo 'you color is not red, green or blue';
};