<?php
class Home extends Controller{
    function index(){
        $products = $this->model('ProductsModel')->getAll();
        $data = [
            "products" => $products
        ];
        $this->view('index', $data);
    }
    function search(){
        $key_search = trim($_GET["key_search"]);
        if(empty($key_search)){
            header('location: index.php?url=home/index');
        }else{
            $products = $this->model("ProductsModel")->search($key_search);
            $data = [
                "products" => $products
            ];
            echo "<pre>";
            $this->view("search", $data);
        }
    }
    function add(){
        $products = $this->model('ProductsModel')->getAll();
        $data = [
            "products" => $products
        ];
        if(isset($_POST['add'])){
            $name_product = $_POST['name_product'];
            $category_id = $_POST['category_id'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $describe = $_POST['describe'];
            $data_add = [
                'name_product' => $name_product,
                'category_id' => $category_id,
                'price' => $price,
                'amount' => $amount,
                'describe' => $describe
            ];
            $this->model('ProductsModel')->add($data_add);
            header('location: ?url=home/index');
        }
        if(isset($_POST['exit'])){
            header('location: ?url=home/index');
        }
        $this->view('add', $data);
    }
    function update($id){
        $categories = $this->model('CategoriesModel')->getAll();
        $products = $this->model('ProductsModel')->getAll();
        $data = [
            "categories" => $categories,
            "products" => $products
        ];
        if(isset($_POST['update'])){
            $name_product = $_POST['name_product'];
            $category_id = $_POST['category_id'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $describe = $_POST['describe'];
            $data_add = [
                'id' => $id,
                'name_product' => $name_product,
                'category_id' => $category_id,
                'price' => $price,
                'amount' => $amount,
                'describe' => $describe
            ];
            $this->model('ProductsModel')->update($data_add);
            header('location: ?url=home/index');
        }
        if(isset($_POST['exit'])){
            header('location: ?url=home/index');
        }
        $this->view('update', $data);
    }
    function delete($id){
        $this->model("ProductsModel")->delete($id);
        header('location: ?url=home/index');
    }
}
?>