<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        
        if(strlen($s) != strlen($t)){
            return false;
        }
        $arr = [];
        $i=0;
        while($i<strlen($s)){
            if(array_key_exists($s[$i],$arr)){
                $arr[$s[$i]] = $arr[$s[$i]] + 1;
            }else{
                $arr[$s[$i]] = 1;
            }
            $i++;
        }
        $j=0;
        while($j<strlen($t)){
            if(array_key_exists($t[$j],$arr)){
                $arr[$t[$j]] = $arr[$t[$j]] - 1;
            }else{
                return false;
            }
            if($arr[$t[$j]] < 0){
                return false;
            }
            $j++;
        }
        return true;
    }
}