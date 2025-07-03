// arrays and strings
// Reverse a string without using .reverse()
function reverseString(str){
    return str.split('').revese().join('');
}

// without using builtin
function reverseStringManual(str){
    let result = '';
    for(let i=str.length-1; i>=0;i--){
        result += str[i];
    }
    return result;
}

function reverseStringSwap(str){
    for(let i=0; i<str.length; i++){
        for (let j=str.length-1; j>i; j--){
            str[i],str[j] = str[j], str[i];
        }
    }
    return str;
}


// check if two strings are anagrams

function isAnagram(s, t){

    if(s.length !== t.length) 
        return false;

    map = {};

    for(let char of s){
        map[char] = (map[char] || 0) + 1;
    }

    for(let char of t) {
        if(!map[char])
            return false;
        map[char]--;
    }

    return true;

}

// Hash Maps / Sets
// Find the first non-repeating character in a string
function firstUniqueChar(s) {
    const count = {};
    for(let char of s){
        count[char] = (count[char] || 0) + 1;
    }
    for(let i=0; i<s.length;i++){
        if(count[s[i]] === 1 )
            return s[i];
    }
    return -1;
}

// Two Pointer / Sliding Window
// find max sum of subarray of length k

function maxSubarraySum(arr,k){
    let max  = 0, sum = 0;
    for(let i=0; i<k; i++){
        sum += arr[i];
        max = sum;
    }

    for(let i=k;i<arr.length;i++){
        sum = sum - arr[i-k] + arr[i];
        max = Math.max(max,sum);
    }

    return max;
}

// Stacks and Queues
// valid parentheses

function isValid(s) {
    const stack = [];
    const map = {'(':')','{':'}','[':']'};
    for (let char of s){
        if(map[char]){
            stack.push(map[char]);
        } else if (char !== stack.pop()){
            return false;
        }
    }
    return stack.length === 0;
}

// Recursion / Backtracking
//  Generate all combinations of n pairs of parentheses.
function generateParenthesis(n) {
    const result = [];
    function backtrack(curr, open, close) {
        if(curr.length === 2 * n)
            return result.push(curr);
        if(open < n)
            backtrack(curr + '(', open + 1, close);
        if(close < open)
            backtrack(curr + ')', open, close+1);
    }
    backtrack('', 0, 0);
    return result;
}