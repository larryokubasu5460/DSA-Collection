<?php

class Solution 
{

    /**
     * @param String $str
     * @return Integer
     */
    function firstUniqChar(string $str): int 
    {
        $charCount = count_chars($str, 1);
        $idx = PHP_INT_MAX;
        foreach ($charCount as $ch => $cnt) {
            if ($cnt === 1) {
                $idx = min($idx, strpos($str, chr($ch)));
            }
        }

        return $idx !== PHP_INT_MAX ? $idx : -1;
    }
}