<?php

function multipe() {

    // loop from 1 to a natural number less than 1000
    $sum = 0;
    for ($i = 0; $i < 1000; $i++) {
        if ($i % 3 != 0 && $i % 5 != 0) {
            continue;
        }

        $sum += $i;
    }
    echo $sum;
}

multipe();

//start with 1,2 
//add 1 and 2 to generate the next sequence number
// move  the pointer to the next and previous to generate the next number 
//check when the limit get to 4m number and break
//calculate the even-valued numbers


$start;
$limit = 2;
$next = 0;
$numbers = array();
for ($start = 1; $start <= $limit; $start = $limit) {

    $next = $start + $limit;
    $limit = $next;
    if ($limit == 34) {
        break;
    }
    echo $start;
}




$previous = 0;
$current = 1;
$sum = 0;

while ($previous < 4000000) {
    $next = $previous + $current;

    if ($next % 2 == 0) {
        $sum += $next;
    }

    $previous = $current;
    $current = $next;
    
}
