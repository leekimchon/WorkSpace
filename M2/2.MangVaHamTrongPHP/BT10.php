<?php
$arr = [
    [1, 5, 6, 3, 5],
    [2, 7, 2, 2, 2],
    [2, 7, 2, 2, 2],
    [2, 7, 2, 2, 2],
    [2, 7, 2, 2, 2]
];
for ($i = 0; $i < count($arr); $i++) {
    $sum = 0;
    for ($j = 0; $j < count($arr[$i]); $j++) {
        $sum += $arr[$j][$i];
    }
    echo 'Tong cot ' . $i . ' = ' . $sum . '<br>';
}