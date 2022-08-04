<?php 
class Stopwatch{
    private $startTime;
    private $endTime;
    function getter(){
        return $this->startTime.' '.$this->endTime;
    } 
};
?>