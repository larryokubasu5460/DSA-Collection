<?php

    /**
     * @param Integer[][] $mat
     * @param Integer $r
     * @param Integer $c
     * @return Integer[][]
     */
function matrixReshape($mat, $r, $c){
    //count rows
    $rm = count($mat);
    if ($rm == $r) return $mat;
    //count original columns
    $cm = count($mat[0]);
    if (($rm * $cm) != ($r * $c)) return $mat;
    $reshaped = [];
    $pr = $pc = 0;
    //iterate with nested loop for two dimensions of reshaped matrix
    for($i = 0; $i<$r; $i++){
        for($n=0;$n<$c;$n++){
            //if column pointer reached maximum, reset to zero
            if($pc==$cm){
                $pc = 0;
                $pr++;
            }
            //put value to matrix
            $reshaped[$i][$n] = $mat[$pr][$pc];

            // increment column pointer
            $pc++;
        }
    }
    // return new matrix
    return $reshaped;
    
}