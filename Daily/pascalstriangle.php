<?php


/*
Given an integer numRows, return the first numRows of Pascal's triangle.

In Pascal's triangle, each number is the sum of the two numbers directly above it as shown:
Input: numRows = 5
Output: [[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]]
*/


    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
function generate($numRows){
    $output_arr = [];
    if($numRows == 0){
        return $output_arr;
    }

    $first_row = [];
    $first_row[] = 1;
    array_push($output_arr, $first_row);

    for($i=1;$i<$numRows;$i++){
        $prev_row = $output_arr[$i - 1];
        $curr_row = [];
        $curr_row[] = 1;
        for($j=1;$j<$i;$j++){
            $curr_row[] = $prev_row[$j - 1] + $prev_row[$j];
        }
        $curr_row[] = 1;
        array_push($output_arr, $curr_row);
    }
    return $output_arr;
}


print_r(array_sum(array_map('count', [[1, 2], [2, 3]])));