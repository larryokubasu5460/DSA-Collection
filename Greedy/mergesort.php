.<?php
  /**
   * Summary of merge
   * @param array $arr
   * @param int $l
   * @param int $mid
   * @param int $r
   * @return void
   */
function merge( &$arr, $l,$mid, $r){
    $i = $j= 0;
    $sub1 = $mid - $l + 1;
    $sub2 = $r - $mid;

    // create temporary arrays and insert subs into them
    $left_array = [];
    $right_array = [];

    for($i=0;$i<$sub1;$i++){
        $left_array[$i] = $arr[$l + $i];
    }
    for($j=0;$j<$sub2;$j++){
        $right_array[$j] = $arr[$j + $mid + 1];
    }
    $k = $l;
    while($i<$sub1 && $j < $sub2){
        if($left_array[$i] <= $right_array[$j]){
            $arr[$k] = $left_array[$i];
            $i++;
        }
        else{
            $arr[$k] = $right_array[$j];
            $j++;
        }
        $k++;
    }
    //while there's still some more add to array
    while($i<$sub1){
        $arr[$k] = $left_array[$i];
        $i++;
        $k++;
    }
    while($j<$sub2){
        $arr[$k] = $right_array[$j];
        $j++;
        $k++;
    }
}
/**
 * Summary of mergeSort
 * @param array $arr
 * @param int $l
 * @param int $r
 * @return void
 */

function mergeSort(&$arr, $l, $r){

    if($l<$r){
        $mid = $l + (int)(($r - $l) / 2);

        mergeSort($arr, $l, $mid);
        mergeSort($arr, $mid + 1, $r);
        merge($arr, $l, $mid , $r);
    }
}

$arr = [12, 11, 13, 5, 6, 7];

print_r(implode(',', $arr));
mergeSort($arr, 0, sizeof($arr) - 1);
print("Skip");
print_r(implode(',',$arr));