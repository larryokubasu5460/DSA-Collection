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