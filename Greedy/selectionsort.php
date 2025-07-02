<?php

class Solution{

    /**
     * @param array $nums
     * @return Integer
     */
    function findSmallest($nums){
        $small = $nums[0];
        $sm_Idx = 0;

        for($i=0;$i<count($nums)-1;$i++){
            if($nums[$i] < $small){
                $small = $nums[$i];
                $sm_Idx = $i;
            }
        }
        return $sm_Idx;
    }

    function selectionSort($nums){
        $newArr = [];

        for($i=0;$i<count($nums)-1;$i++){
            $small = $this->findSmallest($nums);
            array_push($newArr, $nums[$small]);
            unset($nums[$small]);
        }
        return $newArr;
    }
}