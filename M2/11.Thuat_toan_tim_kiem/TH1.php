<?php 
$arr = [1,2,3,5,2,6,0,32,71,8,100,4];
$min = $arr[0];
for($i = 0; $i < count($arr); $i++){
    if($arr[$i] < $min){
        $min = $arr[$i];
    }
}
echo $min;