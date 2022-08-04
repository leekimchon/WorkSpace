<?php
$a=2;
$arr=[5,3,45,2,5,32,2,1,6,3];
for($i=0; $i<count($arr);$i++){
    if($arr[$i]==2){
        array_splice($arr,$i,1);
    }
}
print_r($arr);