<?php

$arr = array(1,2,5,78,99,1,90,101);
$newarr = array_unique($arr);
rsort($newarr);
echo "<br/>";
print_r($newarr[1]);
echo "<br/>";
 ////////////Prime Number /////////
 function checkprime($num){
    if($num<=2){
        return false;
    }
    else{
        for($i=0;$i<=sqrt($num);$i++){
            if($num%$i==0) return false;
        }
    }
 }
 ///////////////Factorial of a number using recursion ////////////
 function factorial($num){
    if($num==1){
        return 1;
    }
    else{
        return $num*factorial($num-1);
    }
 }
 $number =4;
echo "The factoriol of ".$number."<br/>";
echo factorial($number);

///////////////Factorial of a number without using recursion ////////////
function factorialNumber($num){
    $fact = 1;
    for($i=$num;$i>=1;$i--){
        $fact = $i*$fact;
    }
    return $fact;
}
$newnuber =5;
echo "The factoriol of ".$newnuber."<br/>";
echo factorialNumber($newnuber);
//////////////////// Sort using array /////////////////
$nums = [64, 34, 25, 12, 22, 11, 90];
function sortfunction($arr){
    for ($i = count($arr) - 1; $i > 0; $i--) {
        for($j=0;$j<$i;$j++){
            if($arr[$j]>$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}
print_r(sortfunction($nums));
/////////////Fabonacci Series /////////////
echo "<br/>Fabonacci Series<br/>";

$x=0;
$y=1;
for($i=0;$i<=10;$i++){
    echo $x." , ";
    $z = $x + $y;
    $x = $y;
    $y = $z;
}

/////////////Fabonacci Series /////////////
echo "<br/>Most Frequent <br/>";
$nums = [3, 3, 2, 1, 3, 2, 4, 2, 2, 2, 5];
$count = array_count_values($nums);
echo "<br>";
print_r($count);
echo "<br>";
arsort($count);
print_r($count);
echo array_key_first($count);