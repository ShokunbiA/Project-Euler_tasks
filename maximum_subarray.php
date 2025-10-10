<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {

        if(count($nums) == 1){
            return $nums;
        }
        list($right, $left) = split($nums);
        $right_side = maxSubArray($right);
        $left_side = maxSubArray($left);

        $sum = add($left_side,$right_side);

        
    }

    function split($nums){
        $merged_array = array();
         $left = 0;
        $right = count($nums);
         $mid = floor($left + $right/2);
         $left_side = array_slice($nums,0,$mid);
         $right_side = array_slice($nums,$mid);
         array_push($merged_array,$left_side,$right_side);

    }

    function add($left,$right){
        $sum = 0;
        while($left && $right){
            if( $left !=null){
                $sum +=$left;
            }else{
                 $sum +=$right;
            }
        }
        return $sum;
    }
}
