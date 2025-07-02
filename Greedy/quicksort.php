<?php

/**
 * Summary of quickSort
 * @param Integer[] $nums
 * @return mixed
 */
function quickSort($nums){
    if(sizeof($nums) < 2){
        return $nums;
    }
    else{
        $pivot_key = key($nums);
        $pivot = array_shift($nums);
        $greater = [];
        $smaller = [];

        foreach($nums as $val){
            if ($val > $pivot) {
                array_push($greater,$val);
            }else{
                array_push($smaller, $val);
            }
        }
        return array_merge(quickSort($smaller),[$pivot],quickSort($greater));
    }

}

print_r(implode(',',quickSort([10, 5, 2,11,7,9,0, 3])));