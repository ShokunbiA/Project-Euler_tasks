<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {

        $left = 0;
        $right = count($s)-1;
        while($left < $right){
          
            $s[$left] = $s[$right];
            $s[$right] = $s[$left];

            $left++;
            $right--;
        }
        
    }
}

$solution = new Solution();
$array = ["h","e","l","l","o"];
$solution->reverseString($array);
print_r($array);
