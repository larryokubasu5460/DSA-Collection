<?php

// Given a string s, return the most frequent character (an alphabet letter) in the string s


function highestString($sent){
    $highestOccuring = null;
    $letCount = 0;
    $s = strlen($sent);
    for ($i = 0; $i < $s;$i++){
        if(!ctype_alpha($sent[$i])){
            continue;
        }
        $occurrences = 0;
        for($j=$i;$j<$s;$j++){

            if($sent[$i]==$sent[$j]){
               
                $occurrences++;
            }
            if($occurrences > $letCount){
                $highestOccuring = $sent[$i];
                $letCount = $occurrences;
                
            }
        }
    }

    return $highestOccuring;
}

$sentence = "abcdefddabbbbc1133333333";

$sentence2 = "ABDCBBBBErrrRU94356@./FG545DJF8&4534";

print_r(highestString($sentence));
echo "\n";
print_r(highestString($sentence2));