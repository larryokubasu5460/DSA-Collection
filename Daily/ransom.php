<?php
/**
 * Given two strings ransomNote and magazine, return true if ransomNote can be constructed by using the letters from magazine and false otherwise.
 * Each letter in magazine can only be used once in ransomNote.
 */
class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $mag_count = array_count_values(str_split($magazine));
        $ran_count = array_count_values(str_split($ransomNote));

        foreach($ran_count as $ch=>$val){
            if($val > $mag_count[$ch]){
                return false;
            }
        }
        return true;
    }
}