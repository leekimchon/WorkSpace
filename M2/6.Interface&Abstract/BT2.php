<?php

use Square as GlobalSquare;

interface Colorable{
    public function howToColor();
}
class Square implements Colorable{
    public function howToColor(){
        echo 'Color all four sides..';
    }
}
$square=new GlobalSquare();
$square->howToColor();
?>