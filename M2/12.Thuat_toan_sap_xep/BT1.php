<?php
include './Function_Swap_Arr';
$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];
for($i = 0; $i < count($arr); $i++){
    $max = $i;
    for($j = $i + 1; $j < count($arr); $j++){
        if($arr[$j] > $arr[$max]){
            $max = $j;
        }
    }
    if($i != $max){
        swap($arr[$i], $arr[$max]);//hứng mảng sau khi swap
    }
}
print_r($arr);
?>