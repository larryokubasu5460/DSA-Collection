


function BracketMatcher(strArr){

    stack = [];

    for(let i=0; i<strArr.length;i++){
        if(strArr[i] == '('){
            stack.push(strArr[i]);
        }else if(strArr[i] == ')'){
            if(stack.length == 0){
                return 0;
            }else{
                stack.pop();
            }
        }
    }
    return stack.length == 0 ? 1 : 0;
}