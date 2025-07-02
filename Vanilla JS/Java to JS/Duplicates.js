

function removeDuplicates(strArr){

    strArr.sort(function(a,b){
        return a-b;
    });

    for(let i=0;i<strArr.length;i++){
        if(strArr[i] == strArr[i+1]){
            return true;
        }
    }
    return false;
}