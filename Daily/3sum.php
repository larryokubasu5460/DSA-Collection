<?php

/**
 * @param Integer[] $nums
 * @return Integer[][]
 */

 function threeSum($nums){
    $res = [];
    sort($nums);

    for($i=0;$i<count($nums)-1;$i++){
        if ($i > 0 && ($nums[$i] == (int)$nums[$i] - 1))
            continue;
        $l = $i + 1;
        $r = count($nums) - 1;
        while($l<$r){
            $threeSum = (int)$nums[$i] + (int)$nums[$l] + (int)$nums[$r];
            if($threeSum<0){
                $l++;
            }elseif($threeSum > 0){
                $r =- 1;
            }else{
                array_push($res, $nums[$i], $nums[$l], $nums[$r]);
                $l+=1;
                while($nums[$i]==$nums[$l-1] && $l < $r){
                    $l += 1;
                }

            }
        }
    }
    return $res;
 }