<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $indexes = [];
        $left = 0;
        $right = count($nums)-1;

        for($i =0; $i <count($nums); $i++){
            for($j=$i; $j<count($nums);$j++){
                if($nums[$i] + $nums[$j] === $target){
                    array_push($indexes,$i,$j);
                }
            }
            
             
        }
       return $indexes;
    }
}

$a = [2,7,11,15];
$solution = new Solution();
print_r($solution->twoSum($a,18));
 