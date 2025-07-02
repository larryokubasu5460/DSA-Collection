/**
 * Find the word with the most repeated letters
 */

function CountLetters(str){

    words = str.split(" ");
    var maxWord = "";
    var maxCount = 1;
    for(let i=0;i<words.length;i++){
        var dict = new Map();
        var count=0;
        chars = words[i].split("");
        for(let j=0;j<chars.length;j++){
           
            if(dict.has(chars[j])){
                
                dict.set(chars[j],dict.get(chars[j])+1);
            }else{
                dict.set(chars[j],1);
            }

            if(dict.get(chars[j]) > count){
                count = dict.get(chars[j]);
            }
        }
        console.log(dict);
        if(count > maxCount){
            maxCount =count;
            maxWord = words[i];
        }
    }

    if(maxWord === ""){
        return -1;
    }else{
        return maxWord;
    }
}


console.log(CountLetters("Hello thereye"));
