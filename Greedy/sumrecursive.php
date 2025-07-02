<?php

/**
 * Summary of recursiveSum
 * @param Integer[] $nums
 * @return mixed
 */
function recursiveSum($nums){

    if (empty($nums)) {
        return 1;
    }
    else if(count($nums)==1){
        return $nums[0];
    } else {
        return (int)array_shift($nums) + recursiveSum($nums);
    }
}

print(recursiveSum([1, 2, 3,4]));