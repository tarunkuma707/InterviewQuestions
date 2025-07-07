<?php
function checkpalindrome($string){
    if(strtolower($string)===strtolower(strrev($string))){
        return true;
    }
    else{
        return false;
    }
}
if(checkpalindrome("katak")){
    echo "This is palindrome";
}
else{
    echo "This is not palindrome";
}
?>