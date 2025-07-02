<?php


class Solution {
    /**
     * @param String $s
     * @return Integer 
     */
    function lenthOfLongestSubstring($s){
        $i = 0;
        $j = 0;
        $maxCount = 0;
        $hashMap = [];

        while($i < strlen($s)){
            $c = $s[$i];
            if(in_array($c,$hashMap)){
                //remove at j then increment
                unset($hashMap[$j]);
                ++$j;
            }
            array_push($hashMap, $c);
            $maxCount = max($maxCount, $i - $j + 1);
            ++$i;
        }

        return $maxCount;
    }
}