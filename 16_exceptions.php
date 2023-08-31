<?php 

function inverse($x) {
  if(!1/$x) {
    throw new Exception('Division by zero');
  }
  return 1/$x;
}



try {
  echo inverse(5);
  echo inverse(0);
} catch(Exception $e) {
  echo 'Caught Exception', $e->getMessage(), ' ';
}

echo 'Hello World';

?>

