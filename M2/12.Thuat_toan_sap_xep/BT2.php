<?php
include './Function_Swap_Arr';
$arr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
// for($i = 0; $i < count($arr); $i++){
//     for($j = count($arr) - 1; $j > $i; $j--){
//         if($arr[$j] < $arr[$i]){
//             swap($arr[$j], $arr[$i]);
//         }
//     }
// }
for($i = 0; $i < count($arr); $i++){
    for($j = $i + 1; $j < count($arr); $j++){
        if($arr[$j] < $arr[$i]){
            swap($arr[$j], $arr[$i]);
        }
    }
}
print_r($arr);
?>