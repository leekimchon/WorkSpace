<?php
class Test{
    function sum($a, $b){
        if(!is_numeric($a)){
            $a = 0;
        }
        if(!is_numeric($b)){
            $b = 0;
        }
        return $a + $b;
    }
}