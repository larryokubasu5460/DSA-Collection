/* Reverse an integer number
 * Formula for reversing an integer number 
 * set reversed digit to 0
 * Get modulus of number 
 * Divide number by 10
 * set reversed_int to reversed_int*10 + modulusValue
 * check for extremes
 */


function reverse(num){
    var reversedNumber = 0;

    while(num != 0){
        let digit = num%10;
        num = Math.round(num/10);

        if(reversedNumber > Number.MAX_VALUE/10 || reversedNumber == Number.MAX_VALUE/10 && digit > 7){
            return 0;
        }
        if(reversedNumber < Number.MIN_VALUE/10 || reversedNumber == Number.MIN_VALUE/10 && digit < -8){
            return 0;
        }

        reversedNumber = (reversedNumber * 10) + digit;
    }

    return reversedNumber;
}