<?php

/*
*A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and 
removing all non-alphanumeric characters, it reads the same forward and backward. 
Alphanumeric characters include letters and numbers. Given a string s, return true if it is a palindrome, 
or false otherwise.
Input: s = "A man, a plan, a canal: Panama"
Output: true
Explanation: "amanaplanacanalpanama" is a palindrome.
*/

function isPalindrome($s) {
    $l = 0;
    $r = strlen($s) - 1;
    while($l<$r){
        while (($l<$r) && !alphaNum($s[$l])){
            $l++;
        }
        while (($r>$l) && !alphaNum($s[$r])){
            $r--;
        }
        if( strtolower($s[$l]) != strtolower($s[$r])){
            return False;
        }
        $l++;
        $r--;
    }
    return true;
}

function alphaNum($c){
    return ((ord('A') <= ord($c) && ord($c) <= ord('Z')) || (ord('a') <= ord($c) && ord($c) <= ord('z')) || (ord('0') <= ord($c) && ord($c) <= ord('9')));
}