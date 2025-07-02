<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $arr = [];
        $cn = count($nums);
        for($i=0; $i<$cn; $i++){
            for($m=$i+1;$m<$cn;$m++){
                if((int)$nums[$i]+(int)$nums[$m] == $target){
                    array_push($arr,$i,$m);
                }
            }
        }
        return array_unique($arr);
    }
}