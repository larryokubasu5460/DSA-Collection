<?php

// Count characters that appear in a string
//  "I really want to work for Wingspan"


function countChar($string){
    $s = strlen($string);
    $arr = [];
    for($i=0;$i<$s;$i++){
        if(array_key_exists($string[$i],$arr)){
            $arr[$string[$i]] = $arr[$string[$i]] + 1; 
        }else{
            $arr[$string[$i]] = 1;
        }

    }
    return $arr;
}

$strin = "I really want to work for Wingspan";

print_r("Array returned: ");
echo "\n";
$val = countChar($strin);
arsort($val);
foreach($val as $key=>$val){
    print("{$key} : {$val}");
    echo "\n";
}
