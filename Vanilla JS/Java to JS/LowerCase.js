/**
 * Change to lowercase letters
 * 
 */


function CaseLower(str){
    var res = [];
    str.split('').forEach(element => {
        if(element.match(/[a-zA-Z]/) && element === element.toUpperCase()){
            res.push(String.fromCharCode(element.charCodeAt()+32));
        }else{
            res.push(element);
        }
    });

    return res.join("");
}

console.log(CaseLower("LaRry 56gH kdG"));