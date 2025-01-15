# PHP Foreach Loop Modification Bug
This repository demonstrates a common error in PHP when modifying an array during iteration using a foreach loop. The example shows how `unset()` within a foreach loop can cause elements to be skipped.

## Bug Description
The bug arises from the fact that `unset()` changes the array's internal structure while the `foreach` loop is iterating. This leads to elements being missed, resulting in incorrect output.

## Solution
The solution is to iterate over a copy of the array or use a `for` loop to avoid modification of the original array.