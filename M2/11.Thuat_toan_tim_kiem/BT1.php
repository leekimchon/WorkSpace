<?php 
function checkArr($arr, $number){
    $sum = 0;
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] == $number){
            $sum++;
        }
    }
    return $sum;
}
$arr = [1,2,5,12,5,2,4,2,4,1,4,2,4,1,3,2,5,2,];
$number = 1;
echo 'So ' . $number . ' xuat hien ' . checkArr($arr, $number) . ' lan';