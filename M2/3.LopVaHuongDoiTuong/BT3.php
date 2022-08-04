<?php 
class Fan{
    public $SLOW=1;
    public $MEDIUM=2;
    public $FAST=3;
    private int $speed;
    private bool $on=false;
    private int $radius=5;
    private string $color='blue';
    public function __construct(){
    }
    public function setter($speed, $on,$radius,$color){
        $this->speed=$speed;
        $this->on=$on;
        $this->radius=$radius;
        $this->color=$color;
    }
    public function toString(){
        if($this->on== true){
            return 'speed = '.$this->speed.'; color = '.$this->color.'; radius = '.$this->radius.'; Fan is on';
        }else{
            return 'color = '.$this->color.'; radius = '.$this->radius.'; Fan is on';
        }
    }
};
$fan1=new Fan();
$fan1->SLOW;
$fan1->setter($fan1->FAST, true, 4, 'red');
 
?>