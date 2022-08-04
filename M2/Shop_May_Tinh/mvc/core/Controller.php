<?php
class Controller{
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        //khoi tao doi tuong o vi tri cuoi cung trong mang
        $arr = explode("/", $model);
        $count_arr = count($arr);
        return new $arr[$count_arr - 1];
    }

    public function view($view, $data = []){
        require_once "./mvc/views/".$view.".php";
    }
}
?>