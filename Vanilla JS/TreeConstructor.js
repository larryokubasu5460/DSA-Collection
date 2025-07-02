/**
 * Parent has 2 children {parent: [child,child]}
 * Child has at most a parent {child: parent}
 * Iterate across strArr and check if each condition remains true
 */
function constructTree(strArr){ 

    let parents = {};
    let children = {};

    for(let i=0; i<strArr.length; i++){
        var arr = strArr[i].replace(/[()]/g,"").split(",");
        let child = arr[0];
        let parent = arr[1];

        if(parents[parent]){
            parents[parent].push(child);
        }else{
            parents[parent] = [child];
        }

        if(parents[parent].length > 2){
            return false;
        }

        if(children[child]){
            return false;
        }else{
            children[child] = parent;
        }
    }

    return true;
}