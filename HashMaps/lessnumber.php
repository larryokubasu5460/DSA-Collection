<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
       $cn = count($nums);
       $arr = [];
       $idx = 0; 
       for($m=0;$m<$cn;$m++){
           for($i=0;$i<$cn;$i++){
               if($nums[$m] > $nums[$i] && $nums[$m] != $nums[$i]){
                 $idx += 1;   
               }
           }
           array_push($arr,$idx);
           $idx = 0;
       }
       return $arr;
    }
}