<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {

        $left = 0;
        $right = count($nums) - 1;

        while ($left <= $right) {
            $mid = floor(($left + $right) / 2);
            if ($nums[$mid] == $target) {
                return $mid;
            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return -1;
    }

    function getindex($nums, $target) {

        $index = $this->search($nums, $target);
        if ($index == -1) {
            echo "The number is not found in the array";
        } else {
            echo "The number is found in the index " . $index;
        }
    }
}

$nums = [1, 5, 8, 12, 15, 20, 25, 30];
$target = 25;
$solution = new Solution();
$solution->getIndex($nums, $target);

