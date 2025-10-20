<?php

//find the sum of the square of 1 to 100 natural number
// find the square of the sum of 1 to 100 natural number
//find the differences between both.



function squareofthesum($max_natural_number) {
    $sum_the_square = 0;
    $sum_natural_number = 0;
    for ($i = 1; $i <= $max_natural_number; $i++) {
        $square_natural_number = $i * $i;
        $sum_natural_number += $i;
        $sum_the_square += $square_natural_number;
    }
    $square_of_the_sum = $sum_natural_number * $sum_natural_number;
    $the_difference = $square_of_the_sum - $sum_the_square;
    return $the_difference;
}
