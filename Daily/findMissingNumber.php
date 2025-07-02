<?php


function findMissingNumber($numbers){
    $count = count($numbers);
    // print("Count:" .$count);
    $total = (($count+1)/2)*($numbers[0]+$numbers[$count-1]);
    // print("Expected total: $total");
    $sub_total = array_sum($numbers);
    // print("Actual total: $sub_total");
    $num = $total-$sub_total;

    return $num;
}

print_r(findMissingNumber([1,2,4,5,6]));