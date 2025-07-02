


function LongestWord(str){


    var arr = str.match(/\w+/gi);
   
    var sorted = arr.sort(function(a,b){
        return b.length-a.length;
    });

    return sorted[0];
}

console.log(LongestWord("123425435 43632423 432"));