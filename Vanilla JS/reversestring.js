function FirstReverse(str){
    // return str.split('').reverse().join('');
    var sen='';
    for(let i=str.length-1;i>=0;i--){
        sen+=str[i];
    }
    return sen;
}

// console.log(FirstReverse("Hello World"));

function halfReverse(str){
    var right = str.length-1;
    var left = 0;

    while(left != right){

        let temp = str[left];
        str[left] = str[right];
        str[right] = temp;

        left++;
        right--;
    }

    return str;
}

console.log(halfReverse("Hello world"));