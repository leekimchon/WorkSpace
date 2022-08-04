<?php
include "test.php";

//test case 1
$test1 = new Test();
$a = 1; $b = 2;
if($test1->sum($a, $b) == ($a + $b)){
    echo "passed"."<br>";
}else{
    echo "failled"."<br>";
}

//test case 2
$test1 = new Test();
$a = 'a'; $b = 2;
if($test1->sum($a, $b) == $b){
    echo "failled"."<br>";
}else{
    echo "passed"."<br>";
}