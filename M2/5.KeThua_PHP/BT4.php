<?php
include 'TH1.php';
use Shape\Shape;

class Triangle extends Shape{
    public float|int $side1=1;
    public float $side2=1;
    public float $side3=1;
    public function __construct($side1, $side2, $side3){
        $this->side1=$side1;
        $this->side2=$side2;
        $this->side3=$side3;
    }
    public function getArea(){
        $p=$this->getPrimeter();
        return sqrt($p*($p-$this->side1)*($p-$this->side2)*($p-$this->side3));
    }
    public function getPrimeter(){
        return $this->side1+$this->side2+$this->side3;
    }
}
$triangle=new Triangle(3,4,5);
echo '=========='.'<br>';
echo $triangle->getArea().'<br>';
echo $triangle->getPrimeter();
?>