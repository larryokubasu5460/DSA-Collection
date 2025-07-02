/**
 * Change letters by incrementing by 1 and if a letter is a vowel make it uppercase
 */


function LetterChange(str){

    chars = str.split("");
    for(let i=0;i<chars.length;i++){
        if(/[a-z]/.test(chars[i])){
            if(chars[i] == 'Z'){
                chars[i] = 'A';
                continue;
            }
            // increment normal
            chars[i] = String.fromCharCode(chars[i].charCodeAt() +1);

            if(/[aeiou]/.test(chars[i])){
                chars[i] = chars[i].toUpperCase();
            }
        }
    }

    return chars.join("");

}

console.log(LetterChange("hello*3z"));