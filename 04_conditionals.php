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


$age = 10;

if ($age >= 18) {
  echo 'You are old enough to vote';
} else {
  echo 'Sorry you are not old enough to vote';
}

$t = date("H"); // date function takes parameters to return aspects of the date

if ($t < 12) {
  echo 'Good Morning';
} elseif ($t < 17) {
  echo 'Good Afternoon';
} else {
  echo 'Good Evening';
}

$posts = ['First Post'];
$first_post = !empty($posts) ? $posts[0] : "No Posts";
echo $first_post;


// switch - instead of many else ifs
$fave_colour = 'red';
switch($fave_colour) {
  case 'red': 
    echo 'Your favourite colour is red';
    break;
  case 'blue': 
    echo 'Your favourite colour is blue';
    break;
  case 'green': 
    echo 'Your favourite colour is green';
    break;
  default: 
    echo "Your favourite colour isn't red, green or blue";
};