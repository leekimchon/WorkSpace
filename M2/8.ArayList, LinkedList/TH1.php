<?php
class ArrayList{
    public array $arr=[];
    public function add($item){
        array_push($this->arr, $item);
    }
    public function getElement($index){
        if($index < count($this->arr)){
            return $this->arr[$index];
        }
    }
    public function remove($index){
        if($index < count($this->arr)){
            array_splice($this->arr, $index, 1);
            return $this->arr;
        }
    }
}
$arrayList = new ArrayList;
$arrayList->add(2);
$arrayList->add(3);
$arrayList->add(5);
$arrayList->add(2);
echo '<pre>';
print_r($arrayList->arr).'<br>';
print_r($arrayList->remove(3));