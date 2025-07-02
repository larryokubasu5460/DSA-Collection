<?php
/*Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
*You may assume that each input would have exactly one solution, and you may not use the same element twice.
*You can return the answer in any order.
nums = [2,7,11,15], target = 9
solution works for sorted array
*/
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $j = count($nums)-1;
        $i = 0;

        $arr = [];
        while($i < $j){
            if(((int)$nums[$i] + (int)$nums[$j]) > $target){
                $j--;
            }else if(((int)$nums[$i] + (int)$nums[$j]==$target)){
                array_push($arr, $i, $j);
                break;
            }else{
                $i++;
            }
        }
        return $arr;
    }

$nums = [2, 7, 11, 15];
$target = 9;
// print_r(implode(',',twoSum($nums,$target)));
// echo "\n";
// print_r(implode(',', twoSum([3, 2, 4], 6)));
// echo "\n";
// print_r(implode(',', twoSum([3, 3], 6)));
$arr=[2,3,2];
unset($arr[0]);
print_r(implode(',',$arr));
