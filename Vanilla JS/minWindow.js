function MinWindowSubstring(strArr){

    var requiredCharacters = buildMap(strArr[1]);
    var windowCharacters = new Map();

    var right=0;
    var left=0;
    var minWindow="";

    var minimumWindowLength = Number.MAX_VALUE;
    var uniqueCharactersToMatch = requiredCharacters.size;
    var charFrequenciesMatching = 0;

    while(right < strArr[0].length){
        var rightCharacter = strArr[0][right];
        addtoMap(windowCharacters,rightCharacter);
        var rightCharacterPresent = requiredCharacters.has(rightCharacter);
        if(rightCharacterPresent){
            var rightTrue = windowCharacters.get(rightCharacter) == requiredCharacters.get(rightCharacter);

            if(rightTrue){
                charFrequenciesMatching++;
            }
        }

        while(charFrequenciesMatching == uniqueCharactersToMatch && left <= right ){
            var leftCharacter = strArr[0][left];
            var windowSize = right-left+1;

            if(windowSize < minimumWindowLength){
                minimumWindowLength = windowSize;
                minWindow = strArr[0].substring(left,right+1);
            }
            
            windowCharacters.set(leftCharacter, windowCharacters.get(leftCharacter)-1);
            var leftPresent = requiredCharacters.has(leftCharacter);
            if(leftPresent){
                var leftRequirement = windowCharacters.get(leftCharacter) < requiredCharacters.get(leftCharacter);

                if(leftRequirement){
                    charFrequenciesMatching--;
                }
            }
            left++;
        }
        right++;
    }

    return minWindow;

}

function buildMap(t){
    var mp = new Map();
    for(let i = 0;i<t.length;i++){
        let occurrences = 0;
        if(mp.has(t[i])){
            occurrences= mp.get(t[i]);
        }
        mp.set(t[i],occurrences+1);
    }
    return mp;
}

function addtoMap(characterMap,characterToAdd){
    let occurrences = 0;
    if(characterMap.has(characterToAdd)){
        occurrences = characterMap.get(characterToAdd);
    }
    characterMap.set(characterToAdd,occurrences+1);

}