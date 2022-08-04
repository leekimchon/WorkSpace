<?php
class Home extends Controller{
    function index(){
        $this->view("index");
    }

    function show(){
        $result = $this->model("KhachHang")->getALL();
        $this->view("ShowKhachHang", $result);
    }
    
    function add(){
        $this->view("addKhachHang");
        if(isset($_REQUEST["add"])){
            $this->model("KhachHang")->add($_REQUEST["addName"], $_REQUEST["addEmail"], $_REQUEST["addAddress"]);
            header('location:http://localhost:3000/BaiTapModule2/21.MVC/TH/index.php?url=home/show/');
        }
    }

    function delete($id){
        $this->model("KhachHang")->delete($id);
        header('location:http://localhost:3000/BaiTapModule2/21.MVC/TH/index.php?url=home/show/');
    }

    function update($id){
        $this->view("updateKhacHang");
        if(isset($_REQUEST["update"])){
            $this->model("KhachHang")->update($id, $_REQUEST["upName"], $_REQUEST["upEmail"], $_REQUEST["upAddress"]);
            header('location:http://localhost:3000/BaiTapModule2/21.MVC/TH/index.php?url=home/show/');
        }
    }
}
?>
