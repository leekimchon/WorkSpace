<?php
namespace Shape;
class Shape{
    public string $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function show(){
        return 'my name is '.$this->name;
    }
}
class Rectangle extends Shape{
    public int $width;
    public int $height; 
    public function __construct($name, $width, $height){
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(){
        return $this->width * $this->height;
    }
    public function calculatePerimeter(){
        return ($this->width + $this->height)*2;
    }
}
class Square extends Rectangle{

}

class Circle extends Shape{
    public int $radius;
    public function __construct($name, $radius){
        parent::__construct($name);
        $this->radius=$radius;
    }
    public function calculateArea(){
        return 3.14 * $this->radius * $this->radius;
    }
    public function calculatePerimeter(){
        return 2 * 3.14 * $this->radius;
    }
}
class Cylinder extends Circle{
    public int $height;
    public function __construct($name,$radius, $height){
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calculateArea(){
        return 2 * parent::calculateArea() + parent::calculatePerimeter() * $this->height;
    }
    public function calculateVolumn(){
        return parent::calculateArea() * $this->height;
    }
}
// $shape = new Shape('chon');
// echo $shape->show();
// $rectangle = new Rectangle(10,20);
// echo $rectangle->calculateArea().'<br>';
// echo $rectangle->calculatePerimeter().'<br>';
$cylinder=new Cylinder('chon', 10, 20);
echo $cylinder->show().'<br>';
echo $cylinder->calculateArea().'<br>';
echo $cylinder->calculatePerimeter().'<br>';