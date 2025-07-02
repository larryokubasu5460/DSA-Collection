<?php

/*
Given two integer arrays nums1 and nums2, return an array of their intersection. 
Each element in the result must appear as many times as it shows in both arrays and you may 
return the result in any order.
Input: nums1 = [1,2,2,1], nums2 = [2,2]
Output: [2,2]
*/

/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer[]
 */
function intersect($nums1, $nums2)
{
    $i = 0;
    $j = 0;
    sort($nums1);
    sort($nums2);
    $arr = [];
    while($i<count($nums1) && $j<count($nums2)){
        if($nums1[$i] < $nums2[$j]){
            $i++;
        }else if($nums1[$i] > $nums2[$j]){
            $j++;
        }else{
            $arr[] = $nums1[$i];
            $i++;
            $j++;
        }
    }
    return $arr;

}