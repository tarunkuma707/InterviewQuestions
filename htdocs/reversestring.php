<?php

function reverseString($string){
    $revStr = "";
    for($i=strlen($string)-1;$i>=0;$i--){
        $revStr .=  $string[$i];
    }
    return $revStr;
}
echo reverseString("Greekword");
