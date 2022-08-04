<?php 
class Rectangle{
    public int $width;
    public int $height;
    function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return $this->width*$this->height;
    }
    public function getPerimeter(){
        return ($this->width*$this->height)*2;
    }
    public function display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
};

$chunhat1=new Rectangle(10,20);
echo $chunhat1->getArea().'<br>';
echo $chunhat1->getPerimeter().'<br>';
echo $chunhat1->display().'<br>';
?>