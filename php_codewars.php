<!-- Complete the solution so that it splits the string into pairs of two characters. 
If the string contains an odd number of characters then it should replace the missing second character 
of the final pair with an underscore ('_').

Examples:

* 'abc' =>  ['ab', 'c_']
* 'abcdef' => ['ab', 'cd', 'ef'] -->

<?php 

function solution($str) {
  if (empty($str)) {
    return [];
  }

  $array = str_split($str, 1);
  $split = array_chunk($array, 2);
  $result = [];

  foreach($split as $list) {
    if (count($list) == 1) {
      array_push($list, '_');
    } 
    $newString = implode($list);
    array_push($result, $newString);
  }
  return $result;
}

print_r(solution('abcdef'));
echo '<br>';
print_r(solution('abcdefg'));
echo '<br>';
print_r(solution(''));

?>