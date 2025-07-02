<?php


function readFileAndSumNumbers($filepath){
    $sum = 0;
    try{
        $file = new SplFileObject($filepath);
        while(!$file->eof()){
            $line = $file->fgets();

            if(is_numeric($line)){
                $sum += (int) $line;
            }
        }
      

    }catch(Exception $e){
        return "An error occured {$e->getMessage()}";
    }

    return $sum;
}

print_r(readFileAndSumNumbers("num.txt"));