function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'some_value') {
      unset($arr[$key]);
    }
  }
  return $arr; 
}

$arr = ['a', 'b', 'some_value', 'c', 'some_value'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => a [1] => b [3] => c )

// The issue is that the foreach loop modifies the array in place, causing the loop to skip elements.