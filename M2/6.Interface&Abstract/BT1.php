<?php 
interface Resizeable{
    public function resize($size);
}
class Circle implements Resizeable{
    public function resize($size){
        return $size*2;
    }
}
class Rectangle implements Resizeable{
    public function resize($size){
        return $size*3;
    }
}
class Square implements Resizeable{
    public function resize($size){
        return $size*5;
    }
}
?>