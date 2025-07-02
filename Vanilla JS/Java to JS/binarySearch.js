

function BinarySearch(arr,target){
    arr.sort(function(a,b){
        return a-b;
    });
    // console.log(sortedArr);
    var left = 0;
    var right = arr.length-1;

    while(left<=right){
   
        let mid = Math.round(left + (right-left)/2);
     
        if(arr[mid] == target){
            return mid;
        }
        else if(arr[mid] > target){
            right = mid-1;
        }else if(arr[mid] < target){
            left = mid+1;
           
        }

    }
    return -1;

}

console.log(BinarySearch([23,456,3,45,125,67,34,1,35,2],125));