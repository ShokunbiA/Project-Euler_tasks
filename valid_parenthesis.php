<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {

        $stack = [];
        $map = array(
            ')' => '(',
            ']' => '[',
            '}' => '{'
        );

        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            //if its closing bracket
            if (isset($map[$char])) {
                $pop_theopen_bracket = empty($stack) ? "#" : array_pop($stack);
                if ($map[$char] != $pop_theopen_bracket) {
                    return false;
                }
            } else {
                //if its opening bracket
                array_push($stack, $char);
            }
        }
        return empty($stack);
    }
}

$s = "()[]{]";
$solution = new Solution();
$result = $solution->isValid($s);
echo $result;

//LARGET NUMBER DIVISIBLE BY 1,20

function gcd($a,$b){
    while($b !== 0){
        $temp = $b;
        
        //divide $a mod $b and asign the remainder back to $b
        $b = $a % $b;
        
        $a = $temp;
    }
    
    function lcm($a,$b){
        return $a * $b/gcd($a, $b);
    }
     
    function printsmalldivisible($number){
        $result = 1;
        
        for($i =2; $i <=$number ; $i++){
            
            $result = lcm($a, $b);
        }
        return $result;
    }
}
