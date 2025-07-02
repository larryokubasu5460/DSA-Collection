<?php

// implement bubble sort

function bubbleSort(&$arr){
    $n = sizeof($arr);

    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n-$i-1;$j++){
            if($arr[$j]>=$arr[$j+1]){
                $t = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $t;
            }
        }
    }
}

$arr = [12, 45, 56, 43, 3, 4, 0];
bubbleSort($arr);
print_r(implode(',',$arr));
