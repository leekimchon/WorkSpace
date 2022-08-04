<?php 
class QuadraticEquation{
    private float $a;
    private float $b;
    private float $c;
    function __construct($a,$b,$c){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }
    function getDiscriminant(){
        return ($this->b*$this->b)-(4*$this->a*$this->c);
    }
    function getRoot1(){
        return (-$this->b+sqrt($this->getDiscriminant()))/(2*$this->a);
    }
    function getRoot2(){
        return (-$this->b-sqrt($this->getDiscriminant()))/(2*$this->a);
    }
};
$tinh1=new QuadraticEquation(4,-6,-2);
echo $tinh1->getRoot1().'<br>';
echo $tinh1->getRoot2().'<br>';
?>