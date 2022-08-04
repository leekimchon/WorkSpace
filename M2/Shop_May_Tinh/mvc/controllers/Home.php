<?php
class Home extends Controller{
    function index(){
        // session_destroy();
        $this->view("Admin/AdminHome/AdminHome");
    }
}
?>