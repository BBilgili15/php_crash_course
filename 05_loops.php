<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
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



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

for ($x = 0; $x <= 10; $x++) {
  echo "#$x " . '<br>';
}

$y = 1;

while ($y <= 15) {
  echo "#$y" . '<br>';
  $y ++;
}

$z = 1;

//  do while loop
do {
  echo 'Number ' . $z . '<br>';
  $z++;
} while($z <= 5);


// for each

$posts = ['First Post', 'Second Post', 'Third Post'];

// for($a = 0; $a < count($posts); $a++) {
//   echo $posts[$a];
// }

// foreach($posts as $post) {
//   echo $post;
// }

foreach($posts as $index => $post) {
  echo $index . ' - ' . $post . '<br>';
}



$person = [
  'first_name' => 'Ben',
  'last_name' => 'Bilgili',
  'email' => 'benbilgili@gmail.com',
];

foreach($person as $key => $value) {
  echo "$key: $value<br>";
}