<?php
function multipe(){

    // loop from 1 to a natural number less than 1000
    $sum = 0;
      for($i = 0; $i< 1000; $i++){
          if($i % 3 !=0 && $i % 5 != 0){
              continue;
          }
          
         $sum +=$i;
      }
     echo $sum;
}

multipe();
