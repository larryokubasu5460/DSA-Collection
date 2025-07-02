<?php

class Solution {

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones) {
        $st = str_split($stones);
        $jw = str_split($jewels);
        $arr = 0;
        foreach($st as $stn){
            foreach($jw as $jws){
                if($stn === $jws){
                   $arr +=1; 
                }
            }
        }
        return $arr;
    }
}