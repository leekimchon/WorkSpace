<?php
$arr = [1, 2, 3, 7, 0];
$min = $arr[0];
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] < $min) {
        $min = $arr[$i];
    }
}
echo $min;