<?php 
$arr=[
    [2,5,3,7],
    [8,0,4,7,4],
    [6,4,8,3]
];
$max=$arr[0][0];
for($i=0; $i<count($arr);$i++){
    for($j=0; $j<count($arr[$i]);$j++){
        if($arr[$i][$j]>$max){
            $max=$arr[$i][$j];
        }
    }
}
echo $max;