<?php


    /**
     * @param Integer[] $nums
     * @return String
     */
    function largestNumber($nums) {

        $nums = array_map('strval', $nums);

        usort($nums, function ($a, $b) {
            return ($a . $b < $b . $a) ? 1 : -1;
        });

        return $nums[0] == '0' ? '0' : join('', $nums);
    }


print(largestNumber([1, 2, 3, 5, 6, 4]));