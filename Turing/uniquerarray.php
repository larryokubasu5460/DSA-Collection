<?php

function containsDuplicate($nums) {
      
     
    if(count($nums) <=1 ){
        return false;
    }
    return sizeof($nums) != sizeof(array_unique($nums));

}