<?php


function maxSubArray($nums) {
    $currentMaxsum = $nums[0];
    $overallMaxsum = $nums[0];
    if(count($nums)==1){
        return $nums[0];
    }
    for($i=0;$i<count($nums);$i++){
        $currentMaxsum = max($nums[$i] + $currentMaxsum,$nums[$i]);
        $overallMaxsum = max($overallMaxsum,$currentMaxsum);
    }
    return $overallMaxsum;
}

function maxSubArray2($nums) { 
    $sum = $nums[0];
    $maxSum = max($sum,0);
    for($i = 0; $i<count($nums); $i += 1) { 
        $maxSum += $nums[$i];
        $sum=max($sum, $maxSum);
        $maxSum = max($maxSum, 0); 
    } 
    return $sum;
}