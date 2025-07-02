

function setDuplicates(strArr){

    var arrSet = new Set();
    for(let i=0; i<strArr.length;i++){
        if(arrSet.has(strArr[i])){
            return true;
        }
        else{
            arrSet.add(strArr[i]);
        }
    }
    return false;
}