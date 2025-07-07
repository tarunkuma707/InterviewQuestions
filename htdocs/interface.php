<?php
interface course {
    public function subject();
}

class commerce implements course{
    
    public function subject()
    {
        echo "Maths";
    }
}
$com = new commerce();
$com->subject();

function reverseString($string){
    $reverse = "";
    $j = 0;
    while($string[$j]!=null){
        $j++;
    }
    echo "J IS =".$j;
    echo "Length of String is = ".strlen($string);
    for($i=strlen($string)-1;$i>=0;$i--){
        $reverse .= $string[$i];
    }
    return $reverse;
}
echo reverseString("CHECK REVERSE");

function checkpalindrome($string){
    $reverse = strrev($string);
    if(strtolower($string)==strtolower($reverse)){
        return "Palindrome True";
    }
    else{
        return "Not Palindrome";
    }
}
echo checkpalindrome("MADAM");

$arr = [100,101,99,96,76,98,54,96,98];
$unique = array_unique($arr);
rsort($unique);
print_r($unique);
echo $unique[1];

function checkPrime($num){
    if($num<2) return false;
    for($i=2;$i<=sqrt($num);$i++){
        if($num%$i==0){
            return false;
        }
        return true;
    }
}
echo checkPrime(29) ? "Prime" : "Not Prime";

///////////////////////// Recursion ///////////////////
function recursion($num){
    if($num==1){
        return 1;
    }
    else{
        $factorial = $num * recursion($num-1);
        return $factorial;
    }
}
echo recursion(5);
echo "<br/><br/><br/>";
function factorial($num){
    if($num==1){
        return 1;
    }
    else{
        $fact =1;
        for($i=$num;$i>=2;$i--){
            $fact = $fact*$i;
        }
        return $fact;
    }
    
}
echo factorial(5);

/////////////// Sort without using function ////////

function sortArray($arr){
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr)-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] =  $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}
$nums = [64, 34, 25, 12, 22, 11, 90];
echo "<br/>";
print_r(sortArray($nums));
echo "<br/>";
$x = 0;
$y =1;
for($i=0;$i<10;$i++){
    $z =  $x + $y;
    echo $x.", ";
    $x= $y;
    $y = $z;

}
echo "<br/>";
$arr = [64, 34, 25, 12, 22, 11, 90, 64, 25, 25, 11, 11, 11, 11, 64];
$arrcount = array_count_values($arr);
arsort($arrcount);
print_r(array_key_first( $arrcount));
// Define array1 with keys and values 
$array1 = array("subject1" => "Python","subject2" => "sql"); 


// Define array2 with keys and values 
$array2 = array("subject3" => "c/c++","subject4" => "java"); 

// Merge both array1 and array2 
$final = array_merge($array1, $array2); 

// Display merged array 
print_r($final); 

?>
