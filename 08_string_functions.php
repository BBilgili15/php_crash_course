<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

echo strlen($string);
echo '<br>';
echo strtoupper($string);
echo '<br>';
echo str_replace('World', 'Everyone', $string);
echo '<br>';
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

$string2 = '<script>alert(1)</script>';
echo $string2;
echo htmlspecialchars($string2);
echo '<br>';
printf('%s likes to %s', 'Brad', 'code');