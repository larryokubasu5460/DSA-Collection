<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */

    function topKFrequent($nums, $k) {
        $arr = [];
        $i=0;
        while($i<count($nums)){
            if(array_key_exists($nums[$i],$arr)){
                $arr[$nums[$i]] = $arr[$nums[$i]] + 1;
            }else{
                $arr[$nums[$i]] = 1;
            }
            $i++;
        }
        arsort($arr);
        $res = array_keys($arr);

        $res = array_slice($res,0,$k,true);
        return $res;
    }
}