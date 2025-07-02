<?php

// You are given an integer num. Rearrange the digits of num such that its value is minimized and it does not contain any leading zeros.

// Return the rearranged number with minimal value.

// Note that the sign of the number does not change after rearranging the digits.
function smallnumber($num){

    if($num > 0){
        $num = strval($num);
        $num = str_split($num);
        usort($num, function ($a, $b) {
            return ($a . $b < $b . $a) ? -1 : 1;
        });
        $t = 0;
        $i = 0;
        while($i<count($num)){
            if((int)$num[$i] < 1){
                $t++;
            }else{
                $temp = $num[$t];
                unset($num[$t]);
                return $temp . join('', $num);
            }
            $i++;
        }
    }else if($num < 0){

        $num = strval($num);
        $num = str_split($num);
        $sgn = array_shift($num);
        usort($num, function ($a, $b) {
            return ($a . $b < $b . $a) ? 1 : -1;
        });

        return $sgn . join('', $num);
    }
    else{
        return $num;
    }
}

print_r(smallnumber(738));
echo "\n";
print_r(smallnumber(-9345));
echo "\n";
print_r(smallnumber(90034));
echo "\n";
print_r(smallnumber(-10030));
