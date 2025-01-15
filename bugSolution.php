function foo(array $arr) {
  $arrCopy = $arr;
  foreach ($arrCopy as $key => $value) {
    if ($value === 'some_value') {
      unset($arr[$key]);
    }
  }
  return $arr; 
}

$arr = ['a', 'b', 'some_value', 'c', 'some_value'];
$result = foo($arr);
print_r($result); //Correct output Array ( [0] => a [1] => b [3] => c )