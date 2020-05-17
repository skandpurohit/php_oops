<?php


class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {
$collection = array();

foreach($nums as $key => $num) {
    $subtracted = $target - $num;

    if (isset($collection[$subtracted])) {
        return array($collection[$subtracted], $key);  
    } else {
        $collection[$num] = $key;
    }
}

return array();
}
}

$nums = [2, 6, 7, 15];
$target = 9;
$test = new Solution;
var_dump($test->twoSum($nums, $target));