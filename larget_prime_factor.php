<?php


function larget_prime($number) {
    $i = 1;
    $prime_number = array();
    while ($i <= $number) {
        if ($number % $i == 0) {
            array_push($prime_number, $i);
            $number /= $i;
        }
        $i++;
    }

    return largest_sort($prime_number);
}

function largest_sort($prime_number) {

    $larget_number = 0;
    for ($i = 1; $i <= count($prime_number); $i++) {
        if ($prime_number[$i] > $larget_number) {
            $larget_number = $prime_number[i];
        }
    }

    echo $larget_number;
}


   larget_prime(600851475143);

