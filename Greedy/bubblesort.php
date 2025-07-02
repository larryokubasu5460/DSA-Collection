<?php


function bubleSort(&$arr){
    $n = sizeof($arr);

    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n-$i-1;$j++){
            if($arr[$j] > $arr[$j+1]){
                $t = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $t;
            }
        }
    }
}

$arr = [12, 5, 11, 23, 6, 7];
bubleSort($arr);
print_r(implode(',', $arr));