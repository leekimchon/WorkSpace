<?php
include './Function_Swap_Arr';
$arr = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
for($i = 1; $i < count($arr); $i++){
    $j = $i;
    while($j > 0 && $arr[$i] > $arr[$j - 1]){
        $arr[$j - 1] = $arr[$j];
        $j--;
    }
    $arr[$j] = $arr[$i];
}
print_r($arr);
?>