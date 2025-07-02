<?php


  

 

return true;
class Solution{
    /**
     * @param String[][] $board
     * @return Boolean
     */

     function isValidSudoku($board){
        //9 columns, Rows and Blocks
        $rows = [];
        $columns = [];
        $squares = [];
        for($row=0; $row<9;$row++){
            for($column=0;$column<9;$column++){
                if($board[$row][$column] !== '.'){
                    $squaredPosition = (int)($row/3)*3 + (int)($column/3);

                    //3x3 sub boxes
                    if(isset($squares[$squaredPosition][$board[$row][$column]])) return false;
                    $squares[$squaredPosition][$board[$row][$column]] =1 ;

                    //Rows
                    if(isset($rows[$row][$board[$row][$column]])) return false;
                    $rows[$row][$board[$row][$column]] = 1;

                    //columns
                    if(isset($columns[$column][$board[$row][$column]])) return false;
                    $columns[$column][$board[$row][$column]] = 1;
                }
            }
        }
        return true;
     }
}

// $rows = [];
        // $columns = [];
        // $squares = [];
        // for ( $row = 0; $row < 9; $row++ ) {
        //     for ( $column = 0; $column < 9; $column++ ) {
        //         if ( $board[$row][$column] !== '.' ) {
        //             $squarePosition = (int)( $row / 3 ) * 3 + (int)( $column / 3 );

        //             // 3x3 Sub boxes
        //             if(isset($squares[$squarePosition][$board[$row][$column]])) return false;
        //             $squares[$squarePosition][$board[$row][$column]] = 1;

        //             // Rows
        //             if(isset($rows[$row][$board[$row][$column]])) return false;
        //             $rows[$row][$board[$row][$column]] = 1;

        //             // Columns
        //             if(isset($columns[$column][$board[$row][$column]])) return false;
        //             $columns[$column][$board[$row][$column]] = 1;
        //         }
        //     }
        // }

        // return true;