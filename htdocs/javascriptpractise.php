<style>
    div.sticky{
        position:sticky;
    }
    div.absolute{
        position:absolute;
    }
    div.relative{
        position:relative;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="sticky">
        <div class="absolute">
            <div class="relative">
                <p>This is text</p>
            </div>
        </div>
    </div>
</body>
</html>
<script>
(function(){
    ///// IIFE function expression
})()

const person = {
    firstname:"ABC",
    lastname: "XYZ",
    age: 50,
    address: "Chandigarh"
}

let {firstname,lastname,age} =person;

console.log("Your First Name is "+firstname+" Last name is "+lastname+" age "+age);
function myFunc(...args) {
    console.log(args);
}
myFunc(1, 2, 3, 4, 5,6,9,7,8);

function sum(...numbers) {
    let total = 0;
    return numbers.reduce((total,num)=>total+num);
}
console.log(sum(1,2,3,4,5));

const a1 = [1, 2,5,6,7];
const a2 = [3, 4,8,9];
const merged = [...a1, ...a2];
console.log(merged);

let person1 =  {
    name:"Akshay",
    lastname:"Saini",
}

let printname = function(fromTown,fromState){
    console.log(this.name+" "+this.lastname+" HomeTown: "+fromTown+" State:"+fromState);
}
printname.call(person1,"Dehradun","Utrakhand");

printname.apply(person1,["Dehradun","Utrakhand"]);
let pritnameNewName = printname.bind(person1,"Dehradun","Utrakhand");
console.log("%c====================","font-size:33px;color:green");
console.log(pritnameNewName);
console.log("%c====================","font-size:33px;color:red");
pritnameNewName();
(function(){
    console.log("This is IIFE");
})();
console.log("%c====================","font-size:33px;color:blue");
let cars = ["BMW","Maruti","Sakoda"];
for(let x of cars){
    console.log(x);
}

let multiply = function(x,y){
    console.log( x*y );
}
let multiplybyTwo = multiply.bind(this,2);

let currym = function(x){
    return function(y){
        return function(z){
            console.log(x*y*z);
        }
    }
}
currym(2)(3)(4);
console.log("%c====================","font-size:33px;color:red");
/////////////////// Rest //////////////
function add(a,b,...args){
    console.log(args)
}
add(1,2,3,4,5);
/////////////////// Spread //////////////
let ajay = ["Tarun","Kumar","Kurra"];
let ajay2 = ["FN","MN","LN"];
function addspread(...arg1){
    console.log(arg1);
}
addspread(...ajay,...ajay2);
// let obj = {
//     name:"test",
// }
// let user = obj;
// user.name = "Yarun";
// console.warn(obj);

// let obj = {
//     name:"test",
// }
// //let user = Object.assign({},obj);
// user.name = "Yarun";

// let user = {...obj};
// user.name = "Yarun";
// console.warn(obj);
// console.warn(user);

// let obj = {
//     name:"test",
//     address:{
//         city:"Chandigarh",
//         state:"punjab"
//     },
//     getfunc:function(){
//         console.log("FUNCTION HERE");
//     }
// }
// let user = JSON.parse(JSON.stringify(obj));
// user.address.city = "Shimla";
// user.address.state = "Himachal";
// console.warn(obj);
// console.warn(user);

let obj = {
    name:"test",
    address:{
        city:"Chandigarh",
        state:"punjab"
    },
    getfunc:function(){
        console.log("FUNCTION HERE");
    }
}
let user = _.cloneDeep(obj);
user.address.city="Shimla";
user.address.state="Himachal";
console.warn(user);
/////////// MAP ///////
let array = [45,21,23,22,15,17,19];
let newArr = array.map((value)=>{
    return value*2;
});
console.log(newArr);
/////////// MAP ///////
function ageCheck(value,ageVal){
    if(value>ageVal){
        return value;
    }
}
let array2 = [45,21,23,22];
let arrFilter = array2.filter((value)=>{
    return ageCheck(value,18);
});
console.log(arrFilter);
//////////////////////////// Reduce Function ////////////////////
let arrReduce = [1,2,3,40,5];
let newarrReduce = arrReduce.reduce((acc,currentvalue)=>{
    return acc>currentvalue ? acc : currentvalue;
});
console.log(newarrReduce);
function checkPalindrome(string){
    let rev_str = "";
    for (let i = string.length - 1; i >= 0; i--) {
        rev_str += string[i];
    }
    // Return reverse string 
    return rev_str.toLowerCase();
}
function checkPalindrome2(string){
    let newString = string.split("");
    let actualString = newString.join();
    console.log("%cActual Array","font-size:15px;color:red;");
    console.log(actualString);
    console.log("%cNew Array","font-size:15px;color:red;");
    console.log(newString);
    let reverseString = (newString.reverse()).join();
    console.log("%cReverse Array","font-size:15px;color:red;");
    console.log(reverseString);
    if(actualString==reverseString){
        return "this is palindrom";
    }
    else{
        return "NOT Palindrom";
    }
}
// console.log(checkPalindrome("msasf444Fm"));
// console.log("%c======","font-size:15px;color:red;");
console.log(checkPalindrome2("racecar"));

console.log("%c======TEST ==========","font-size:25px;color:red;");
let a = 1;
function test(){
    console.log(a);
    a = 2;
}
test();
console.log("%c======TEST2 ==========","font-size:25px;color:red;");
console.log(0 && "HELLO1");
console.log(1 && "HELLO2");
</script>