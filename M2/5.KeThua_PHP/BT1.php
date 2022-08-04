<?php

use Circle as GlobalCircle;
use Cylinder as GlobalCylinder;

class Circle{
    public float $radius;
    public string $color;
    public function __construct($radius, $color){
        $this->radius=$radius;
        $this->color=$color;
    }
    public function Area(){
        return pi() * $this->radius * $this->radius;
    }
    public function toString(){
        echo 'r='.$this->radius.'<br>'.'color:'.$this->color.'<br>';
    }
}
class Cylinder extends Circle{
    public float $height;
    public function __construct($height, $radius, $color){
        parent::__construct($radius, $color);
        $this->height=$height;
    }
    public function theTich(){
        return pi() * $this->radius * $this->radius * $this->height;
    }
    public function toString(){
        echo 'height='.$this->height.'<br>'.'r='.$this->radius.'<br>'.'color:'.$this->color.'<br>';
    }
}
$circle = new Circle(5, 'red');
echo $circle->Area().'<br>';
$circle->toString();
$cylinder = new Cylinder(5, 6, 'blue');
echo $cylinder->theTich().'<br>';
$cylinder->toString();
?>