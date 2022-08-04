<?php
$arr = [
    [1, 5, 6, 3, 5],
    [2, 7, 2, 2, 2],
    [2, 7, 2, 2, 2],
    [2, 7, 2, 2, 2],
    [2, 7, 2, 2, 2]
];
$trai = 0;
$phai = 0;
$j = 0;
for ($i = 0; $i < count($arr); $i++, $j++) {
    $phai += $arr[$i][$j];
}
$j = 0;
for ($i = count($arr) - 1; $i >= 0; $i--, $j++) {
    $trai += $arr[$i][$j];
}
echo $phai;
echo $trai;