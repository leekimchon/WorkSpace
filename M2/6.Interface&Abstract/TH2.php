<?php
class Circle{
    public float|int $radius;
    public function __construct(float|int $radius){
        $this->radius = $radius;
    }
    public function getRadius(){
        return $this->radius;
    }
}
interface Comparable{
    public function compareTo($objTwo);
}
class ComparableCircle extends Circle implements Comparable{
    public function compareTo($objTwo): int{
        $circleTwoRadius = $objTwo->getRadius();
        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        } else if ($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}
$circleOne = new ComparableCircle(8);
$circleTwo = new ComparableCircle(2);
$test = $circleOne->compareTo($circleTwo);
echo('Comparable: <br>');
echo $test;