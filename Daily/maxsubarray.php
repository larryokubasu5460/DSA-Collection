<?php

/*
Given an integer array nums, find the subarray with the largest sum, and return its sum.
Input: nums = [-2,1,-3,4,-1,2,1,-5,4]
Output: 6
Explanation: The subarray [4,-1,2,1] has the largest sum 6.
Kadanes Algorithm
*/
   /**
     * @param Integer[] $nums
     * @return Integer
     */
function maxSubArray($nums)
{

    if(count($nums) == 1){
        return $nums[0];
    }
    $currentSum = $nums[0];
    $maxSum = $nums[0];

    for($i=1;$i<count($nums);$i++){
        if($currentSum + $nums[$i] < $nums[$i]){
            $currentSum = $nums[$i];
        }else{
            $currentSum += $nums[$i];
        }
        if($currentSum > $maxSum){
            $maxSum = $currentSum;
        }
    }
    return $maxSum;
}