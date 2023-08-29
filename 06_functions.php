<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function registerUser($name) {
  echo "$name Registered <br>";
}

registerUser('Ben');
registerUser('John');

function sum($n1=4, $n2=5) { // setting default values
  return $n1 + $n2;
}

$result = sum(10, 60);
echo $result;

echo sum();

$subtract = function($n1, $n2) {
  return $n1 - $n2;
};

echo $subtract(10, 5);

$multiply = fn($n1, $n2) => $n1 * $n2; // arrow function
echo $multiply(9,9);