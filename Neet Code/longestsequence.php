<?php


/**
 * Given an unsorted array of integers nums, return the length of the longest consecutive elements sequence.
 * You must write an algorithm that runs in O(n) time.
 * Input: nums = [100,4,200,1,3,2]
 * Output: 4
 * Explanation: The longest consecutive elements sequence is [1, 2, 3, 4]. Therefore its length is 4.
 */

 class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums) {

        if(empty($nums)){
            return 0;
        }
        $uniqueNums = [];
        foreach($nums as $num){
            $uniqueNums[$num] = true;
        }

        $longest = 0;
        foreach($nums as $num){
            $seqLength=1;
            if(!isset($uniqueNums[$num-1])){
                while(isset($uniqueNums[$num+$seqLength])){
                    $seqLength++;
                }
            }
            $longest = max($longest,$seqLength);
        }
        return $longest;
    }
 }