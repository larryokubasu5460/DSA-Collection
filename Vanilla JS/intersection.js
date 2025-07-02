function findIntersection(strArr){
    var arr1 = strArr[0].split(', ');
    var arr2 = strArr[1].split(', ');

    let newArr = [];

    for(let i=0;i<arr1.length; i++){
        if(arr2.includes(arr1[i])){
            newArr.push(arr1[i]);
        }
    }
    if(newArr.length === 0){
        return false;
    }
    else{
        return newArr.toString();
    }
}

console.log(findIntersection(["1, 3, 4, 7, 13", "1, 2, 4, 13, 15"]));