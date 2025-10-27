<?php


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
     
    function printsmallestMultiple($number){
        $result = 1;
        
        for($i =2; $i <=$number ; $i++){
            
            $result = lcm($a, $b);
        }
        return $result;
    }
}


