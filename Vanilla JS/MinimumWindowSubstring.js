/**
 * Given a string corpus and a string target, find the minimum window (substring) which contain all the 
 * characters that are found in target.
 */

/**
 * @param {string} searchString
 * @param {string} t
 * @return {string}
 */

const minWindow = (searchString,t)=>{
    // creating map for storing the frequency of characters
    var requiredCharacters = buildMappingOfCharactersToOccurrences(t);
    var windowCharacterMapping = new Map();

    var left = 0;
    var right = 0;

    var totalFrequenciesToMatch = requiredCharacters.size;
    var charFrequenciesInWindowThatMatch = 0;
// store minimum length of valid substring
    var minWindowLengthSeenSoFar = Number.MAX_VALUE;
// it will store the actual substring
    var minWindow = "";

    // two pointer approach
    while(right < searchString.length ){
        var characterAtRightPointer = searchString[right];
        addCharacterToHashtableMapping(windowCharacterMapping,characterAtRightPointer);

        var rightCharIsARequirement = requiredCharacters.has(characterAtRightPointer);
        if(rightCharIsARequirement){
            var requirementForCharacterMet = requiredCharacters.get(characterAtRightPointer) 
            == windowCharacterMapping.get(characterAtRightPointer);

            if(requirementForCharacterMet){
                charFrequenciesInWindowThatMatch++;
            }
        }

        while(charFrequenciesInWindowThatMatch == totalFrequenciesToMatch && left<=right){
            var characterAtLeftPointer = searchString[left];
            var windowSize = right - left + 1;

            if(windowSize < minWindowLengthSeenSoFar){
                minWindowLengthSeenSoFar = windowSize;
                minWindow = searchString.substring(left,right+1);
            }

            windowCharacterMapping.set(characterAtLeftPointer, windowCharacterMapping.get(characterAtLeftPointer)-1);

            var leftCharIsARequirement = requiredCharacters.has(characterAtLeftPointer);
            if(leftCharIsARequirement){
                var characterFailsRequirement = windowCharacterMapping.get(characterAtLeftPointer) < requiredCharacters.get(characterAtLeftPointer);

                if(characterFailsRequirement){
                    charFrequenciesInWindowThatMatch--;
                }
            }
            left++;
        }
        right++;
    }
    return minWindow;

}

// Helper function for calculating the frequencies of characters in string
const buildMappingOfCharactersToOccurrences = (s) => {
    var map = new Map();

    for(var i = 0; i<s.length; i++){
        var occurrencesOfCharacter = 0;
        if(map.has(s[i])){
            occurrencesOfCharacter  = map.get(s[i]);
        }
        map.set(s[i],occurrencesOfCharacter+1);
    }
    return map;
}

// helper function for adding character to Map
const addCharacterToHashtableMapping = (map,c)=>{
    var occurrences = 0;
    if(map.has(c)){
        occurrences = map.get(c);
    }
    map.set(c,occurrences+1);
}