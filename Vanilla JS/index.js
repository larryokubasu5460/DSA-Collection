const names = [
    {firstName: "Larry", lastName:"Okubasu"},
    {firstName: "Favor", lastName:"Nafula"},
    {firstName: "Daizy", lastName:"Nerima"}
];

const fullNames = names.map((name)=>`${name.firstName} ${name.lastName}`);

// console.log(fullNames);

let arr = [1,2,3,4,5,6];

arr.map(function(element,index,array){
    console.log(element);
    console.log(index);
    console.log(array);
    console.log(this);
    return element;
},80);