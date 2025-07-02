<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target) {
       for($i=0;$i<count($matrix);$i++){
           if($matrix[$i][0]<= $target && $matrix[$i][count($matrix[$i])-1] >= $target){
                return $this->binarySearch($matrix[$i],$target);
           }
        }
       
       return false;

    }
    function binarySearch(&$array,&$x){
        
        if(count($array) == 0){
            return false;
        }
        $low = 0;
        $high = count($array)-1;
        while($low<=$high){
            $mid = floor(($low + $high)/2);
            if($array[$mid] == $x){
                return true;
            }if($array[$mid] > $x){
                $high = $mid-1;
            }else{
                $low=$mid+1;;
            }
        }
        return false;
    }
}