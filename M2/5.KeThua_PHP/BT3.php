<?php 
class Point{
    public float $x;
    public float $y;
    public function __construct($x, $y){
        $this->x=$x;
        $this->y=$y;
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function setX($x){
        $this->x=$x;
    }
    public function setY($y){
        $this->y=$y;
    }
    public function setXY($x, $y){
        $this->x=$x;
        $this->y=$y;
    }
    public function getXY(){
        $arr=[$this->x, $this->y];
        return $arr;
    }
    public function toString(){
        echo 'X='.$this->x.'<br>';
        echo 'Y='.$this->y.'<br>';
    }
}
class MoveablePoint extends Point{
    public float $xSpeed;
    public float $ySpeed;
    public function __construct($x, $y, $xSpeed, $ySpeed){
        $this->x=$x;
        $this->y=$y;
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }
    public function getXSpeed(){
        return $this->xSpeed;
    }
    public function getYSpeed(){
        return $this->ySpeed;
    }
    public function setXSpeed($xSpeed){
        $this->xSpeed=$xSpeed;
    }
    public function setYSpeed($ySpeed){
        $this->ySpeed=$ySpeed;
    }
    public function getSpeed(){
        $arr=[$this->xSpeed, $this->ySpeed];
        return $arr;
    }
    public function move(){
        $array=[$this->xSpeed++, $this->ySpeed++];
        return $array;
    }
    public function toString(){
        echo 'xSpeed='.$this->xSpeed.'<br>';
        echo 'ySpeed='.$this->ySpeed.'<br>';
    }
}
$point=new Point(1, 2);
echo '<pre>';
print_r($point->getXY());
$moveablePoint=new MoveablePoint(2, 3, 4, 5);
echo '<pre>';
print_r($moveablePoint->getXY());
echo '<pre>';
print_r($moveablePoint->getSpeed());
?>