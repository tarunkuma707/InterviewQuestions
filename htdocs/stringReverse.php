<?php
$string = "ZEESHAN";

$j = 0;
while(!empty($string[$j])) {
   $j++;
}

for($i = ($j-1); $i >= 0; $i--) {
    echo $string[$i];
}

function factorial($num){
    if($num==1){
        return $num;
    }
    else{
        $num = $num * factorial($num-1);
        return $num;
    }
}
echo factorial(5);
?>
<script>
var x = 100;
 
 function xyz() {
   if (false) {
     var x = 200;
   }
   console.log(x);
 }
  
 xyz();
 console.log(1);
 setTimeout(function(){console.log(2)},1000);
 setTimeout(function(){console.log(3)},0);
 console.log(4);
 function xabc(){
    var i =1;
    setTimeout(function(){
        console.log("Inside Function");
        console.log(i);
    },1000);    
 }
 xabc();

 const data = false;
 const data1 = new Boolean(false)
 if(data){
    console.log("first");
 }
 if(data1){
    console.log("second");
 }
 </script>