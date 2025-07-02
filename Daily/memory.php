<?php


function findMemoryUsage($largeArray){

    $startMemory = memory_get_usage();
    echo $startMemory;
    echo "\n";
    sort($largeArray);
    rsort($largeArray);
    $endMemory = memory_get_usage();
    echo $endMemory;
    echo "\n";

    return $endMemory-$startMemory;
}

print_r(findMemoryUsage([1,2,4,5,6,78,67,34534,645,3463,346,344535,5,345,36,3345,3,5,6,3,465]));