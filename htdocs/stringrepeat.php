<?php
$string =strtolower("php is great and PHP is powerful and PHP is everywhere");
$explodeString = explode(" ",$string);
$countValues = array_count_values($explodeString);
arsort($countValues);
$check=1;
foreach($countValues as $kx=>$values){
    if($check<=3){
        echo $kx."-".$values."<br/>";
    }
    $check++;
}
echo "==================== Array Sort =============<br/>";
$newArr = [64, 34, 25, 12, 22, 11, 90];
function sortAraray($newArr){
    for($k=0;$k<count($newArr);$k++){
        for($j=0;$j<count($newArr)-1;$j++){
            if($newArr[$j]>$newArr[$j+1]){
                $temp = $newArr[$j];
                $newArr[$j] = $newArr[$j+1];
                $newArr[$j+1] = $temp;
            }
        }
    }
    return $newArr;
}
?>