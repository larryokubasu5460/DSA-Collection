
/**
 * Find the number of jewels in a stone
 */

function JewelsAndStones(str1, str2){
    var numJewels = 0;

    for(i=0;i<str1.length;i++){
        if(str2.includes(str1[i])){
            numJewels+=1;
        }
    }

    return numJewels;
}