<?php

//song that prints 99 bottles of beer
$x = 99;
while($x > 0){
    if($x == 1){
        print("{$x} bottle of beer on the wall, 1 bottle of beer.Take one down and pass it around, no more bottles of beer on the wall.");
        echo "\n";
        print("No more bottles of beer on the wall, no more bottles of beer.");
        echo "\n";
        print("Go to the store and buy some more, 99 bottles of beer on the wall.");
        return;
    }
    else{
        print("{$x} bottles of beer on the wall, {$x} bottles of beer.Take one down and pass it around, ".($x-1)." bottle of beer on the wall.");
        echo "\n";
    }
    $x--;

}

