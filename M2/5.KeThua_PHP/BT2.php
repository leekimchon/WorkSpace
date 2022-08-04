<?php 
class Point2D{
    public float $x;
    public float $y;
    public function __construct($x, $y){
        $this->x=$x;
        $this->y=$y;
    }
    public function toString(){
        echo 'x = '.$this->x.', y = '.$this->y.'.<br>';
    }
}
class Point3D extends Point2D{
    public float $z;
    public function __construct($x, $y, $z){
        parent::__construct($x, $y);
        $this->z=$z;
    }
    public function toString(){
        echo 'x = '.$this->x.', y = '.$this->y.', z = '.$this->z;
    }
}
$point2d = new Point2D(2, 3);
$point2d->toString();
$point3d = new Point3D(1,  2, 3);
$point3d->toString();
?>