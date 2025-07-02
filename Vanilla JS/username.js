/**
 * Codeland Username Validation
HIDE QUESTION
Have the function CodelandUsernameValidation(str) take the str parameter being passed and determine if the string is a valid username according to the following rules:

1. The username is between 4 and 25 characters.
2. It must start with a letter.
3. It can only contain letters, numbers, and the underscore character.
4. It cannot end with an underscore character.

If the username is valid then your program should return the string true, otherwise return the string false.
 */

function CodelandUsernameValidation(str){
    
    const valid_reg = /^[a-zA-z][a-zA-z0-9_]*[^_]$/g;
    const valid_length = (str) => str.length >=4 && str.length <=25;

    return valid_reg.test(str) && valid_length(str);
}