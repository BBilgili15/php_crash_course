<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pear'];

// get length
echo count($fruits), '<br>';

// search array
var_dump(in_array('apple', $fruits));

echo in_array('apple', $fruits);
echo '<br>';

// add to array
$fruits[] = 'grape'; //add to end
array_unshift($fruits, 'strawberry'); //add to start
array_push($fruits, 'banana', 'pineapple'); //add to end

// remove from array
array_pop($fruits); //remove end
array_shift($fruits); //remove start
unset($fruits[2]); // remove index (doesn't shift) - index 2 is gone


// split into 2 chunks
$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);
echo '<br>';

$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);


echo '<br>';
$arr4 = [...$arr1, ...$arr2];
print_r($arr4);

echo '<br>';
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
print_r($c);

echo '<br>';
$keys = array_keys($c);
print_r($keys);

echo '<br>';
$flipped = array_flip($c);
print_r($flipped); // swap keys and values

echo '<br>';
$numbers = range(1, 20);
print_r($numbers);


echo '<br>';
$newNumbers = array_map(function($number) { //map
  return "Number $number";
}, $numbers);
print_r($newNumbers);

echo '<br>';
$lessThan10 = array_filter($numbers, fn($number) => $number < 10); // filter
print_r($lessThan10);

echo '<br>';
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number); // reduce
var_dump($sum);