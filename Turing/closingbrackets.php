<?php


// Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

// An input string is valid if:

// Open brackets must be closed by the same type of brackets.
// Open brackets must be closed in the correct order.
// Every close bracket has a corresponding open bracket of the same type.
/**
 * Summary of isValid
 * @param string $s
 * @return boolean
 */



// $s = "[](){}";
// $res = isValid($s);
// if($res == true){
//     print("Valid");
// } else {
//     print("Invalid");
// }


function isValid2($s) {
    if(strlen($s)%2!=0){
        return false;
    }
    
    $process_arr = array();
    $s_arr = str_split($s);
    foreach($s_arr as $i){
        switch($i){
            case '(':
                array_push($process_arr,')');
                break;
            case '{':
                array_push($process_arr,'}');
                break;
            case '[':
                array_push($process_arr,']');
                break;
            default:
                if(empty($process_arr) || $i != $process_arr[count($process_arr)-1]){
                    return false;
                }else{
                    array_pop($process_arr);
                }
                break;
            
        }
    }
    
    return count($process_arr)==0;
    
}

function isValid3($s) {
        
    // All odd and string lenght 1 will return false.
    if(strlen($s) == 1 || strlen($s) % 2 != 0)
    {
        return false;
    }
    
    $validBrackets = ["{" => "}", "[" => "]", "(" => ")"];
    $string_array  = str_split($s);
    $openBrackets  = array();
    
    foreach($string_array as $char)
    {
        if($char == '(' || $char == '[' || $char == '{')
        {
            array_push($openBrackets, $char);
        }
        
        else
        {
            // Checking the last element in the array
            $lastBracket = end($openBrackets);
            if(empty($openBrackets) || $validBrackets[$lastBracket] != $char)
            {
                return false;
            }
       
           array_pop($openBrackets);
            
        }
    }
    
   $result = empty($openBrackets) ?  true : false;

   return $result;
}


/*
int n  = nums.size();

if(nums[0] <=nums[n-1]){
    return nums[0];
}

int s =0,e=n-1; 
 while(s<=e){

     int mid = (s+e)/2;

     if(mid -1 >=0 && nums[mid] < nums[mid-1]){
         return nums[mid];
     }
     else if(nums[mid] > nums[n-1])
     {
         s  = mid+1;
     }
     else{
         e = mid -1;
     }
 }
 return INT_MIN;



$n= count($nums);
        if($n==1) return $nums[0];
        $end=$n-1;
        $start=0;
 
        if($nums[$start] < $nums[$end]){
            return $nums[$start] ;
        }
        while($end > $start){
            $mid=floor(($start+$end)/2);
            if($nums[$mid] > $nums[$start])
            {
              $start=$mid;
            }elseif($nums[$mid] < $nums[$start])
            {
              $end=$mid;
            }elseif($mid == $start )
            {
              return min($nums[$mid],$nums[$start],$nums[$end]);
            }
        }
        return min($nums[$mid],$nums[$start],$nums[$end]);

*/