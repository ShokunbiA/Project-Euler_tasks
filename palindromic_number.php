<?php

function palindromic_number() {

    $start = 999;
    $end = 100;
    $palindromic = 0;
    for ($i = $start; $i >= $end; $i--) {
        for ($j = $i; $j >= $end; $j--) {
            $product = $i * $j;

           
            if($product <= $palindromic){
                break;
            }
            if(ispalindromic($product)){
                $palindromic = $product;
            }
        }
    }
    return $palindromic;
}

function ispalindromic($number){
    return (string)$number === strrev((string)$number);
}

palindromic_number();