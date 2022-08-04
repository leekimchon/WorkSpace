<?php
class Products extends Controller{
    function index($num_page = 1){
        $limit = 10;
        $count_products = $this->model("Admin/ProductsModel")->count_products();
        if(isset($_POST["limit_page_products"])){
            $_SESSION["limit_page_products"] = $_POST["limit_page_products"];
            header('location: index.php?url=products/index/1');
        }else if(isset($_SESSION["limit_page_products"])){
            $key_search = "";
            if(isset($_POST["btn_search"])){
                $key_search = $_POST["key_search"];
            }
            $limit = $_SESSION["limit_page_products"];
            $total_page = ceil($count_products / $limit);
            $start = ($num_page - 1) * $limit;
            $products = $this->model("Admin/ProductsModel")->show_products($start, $limit, $key_search);
            $data = [
                "products" => $products,
                "total_page" => $total_page
            ];
            $this->view("Admin/Products/index", $data);
        }else{
            $key_search = "";
            if(isset($_POST["btn_search"])){
                $key_search = $_POST["key_search"];
            }
            $total_page = ceil($count_products / $limit);
            $start = ($num_page - 1) * $limit;
            $products = $this->model("Admin/ProductsModel")->show_products($start, $limit,$key_search);
            $data = [
                "products" => $products,
                "total_page" => $total_page
            ];
            $this->view("Admin/Products/index", $data);
        }
    }

    function trash(){
        $trash = $this->model("Admin/ProductsModel")->show_trash();
        $data = [
            "trash" => $trash
        ];
        $this->view("Admin/Products/trash", $data);
    }

    function add(){
        $categories = $this->model("Admin/CategoriesModel")->show_full_categories();
        $err = [];
        $data_add = [];
        if(isset($_POST["add"])){
            // echo "<pre>";
            // print_r($_FILES);die;
            $name_add = trim($_POST["name_add"]);
            $add_gia_goc = trim($_POST["add_gia_goc"]);
            $add_gia_ban = trim($_POST["add_gia_ban"]);
            $add_bao_hanh_xuat_xu = trim($_POST["add_bao_hanh_xuat_xu"]);
            $add_link_anh = $_FILES['add_link_anh']['name'];
            $add_id_category = trim($_POST["add_id_category"]);
            $data_add = [
                "name_add" => $name_add,
                "add_gia_goc" => $add_gia_goc,
                "add_gia_ban" => $add_gia_ban,
                "add_bao_hanh_xuat_xu" => $add_bao_hanh_xuat_xu,
                "add_link_anh" => $add_link_anh,
                "add_id_category" => $add_id_category
            ];
            if(empty($name_add)){
                $err["name_add_err"] = "Tên sản phẩm không được để trống";
            }
            if(empty($add_gia_goc)){
                $err["add_gia_goc_err"] = "Giá gốc không được để trống";
            }
            if(empty($add_gia_ban)){
                $err["add_gia_ban_err"] = "Giá bán không được để trống";
            }
            if(empty($add_bao_hanh_xuat_xu)){
                $err["add_bao_hanh_xuat_xu_errr"] = "Bảo hành xuất xứ không được để trống";
            }
            if(empty($add_link_anh)){
                $err["add_link_anh_errr"] = "Ảnh không được để trống";
            }
            if(!empty($this->model("Admin/ProductsModel")->check_add_Products($name_add))){
                $err["name_add_err"] = "Tên sản phẩm đã tồn tại";
            }
            if(empty($err)){
                move_uploaded_file($_FILES['add_link_anh']['tmp_name'], 'mvc/images/products/'.$_FILES['add_link_anh']['name']);
                $_SESSION['flash_message'] = "Đã thêm $name_add";
                $this->model("Admin/ProductsModel")->add_products($data_add);           
                header('location: index.php?url=products/index');
            }
        }
        $data = [
            "data_add" => $data_add,
            "categories" => $categories,
            "err" => $err,
        ];
        $this->view("Admin/Products/add", $data);
    }

    function update($id_products){
        $products_old = $this->model("Admin/ProductsModel")->show_products_old($id_products);
        $products_old = $products_old[0];
        $categories = $this->model("Admin/CategoriesModel")->show_full_categories();
        $err = [];
        $data_update_products = [];
        if(isset($_POST["update"])){
            $name_update = trim($_POST["name_update"]);
            $update_gia_goc = trim($_POST["update_gia_goc"]);
            $update_gia_ban = trim($_POST["update_gia_ban"]);
            $update_bao_hanh_xuat_xu = trim($_POST["update_bao_hanh_xuat_xu"]);
            $update_link_anh = $_FILES['update_link_anh']['name'];
            $update_id_category = trim($_POST["update_id_category"]);
            $data_update_products = [
                "id_products" => $id_products,
                "name_update" => $name_update,
                "update_gia_goc" => $update_gia_goc,
                "update_gia_ban" => $update_gia_ban,
                "update_bao_hanh_xuat_xu" => $update_bao_hanh_xuat_xu,
                "update_link_anh" => $update_link_anh,
                "update_id_category" => $update_id_category
            ];
            if(empty($name_update)){
                $err["name_update_err"] = "Tên sản phẩm không được để trống";
            }
            if(empty($update_gia_goc)){
                $err["update_gia_goc_err"] = "Giá gốc không được để trống";
            }
            if(empty($update_gia_ban)){
                $err["update_gia_ban_err"] = "Giá bán không được để trống";
            }
            if(empty($update_bao_hanh_xuat_xu)){
                $err["update_bao_hanh_xuat_xu_errr"] = "Bảo hành xuất xứ không được để trống";
            }
            if(empty($update_link_anh)){
                $err["update_link_anh_errr"] = "Link ảnh không được để trống";
            }
            // if($update_email_user != $user_old->email){
            //     $check_email_user_update = $this->model("Admin/UsersModel")->check_email_user_update($update_email_user);
            //     if(!empty($check_email_user_update)){
            //         $err["update_email_user_err"] = "Email đã tồn tại";
            //     }
            // }
            if(empty($err)){
                move_uploaded_file($_FILES['update_link_anh']['tmp_name'], 'mvc/images/products/'.$_FILES['update_link_anh']['name']);
                $this->model("Admin/ProductsModel")->update_products($data_update_products);
                header("location: index.php?url=products/index");
            }
        }
        $data = [
            "data_update_products" => $data_update_products,
            "categories" => $categories,
            "products_old" => $products_old,
            "err" => $err
        ];
        $this->view("Admin/Products/update", $data);
    }

    function delete($id_products){
        $this->model("Admin/ProductsModel")->delete_products($id_products);
        header('location: index.php?url=products/index');
    }
    function un_delete($id_products){
        $this->model("Admin/ProductsModel")->un_delete_products($id_products);
        header('location: index.php?url=products/trash');
    }

    function search(){
        $key_search = trim($_GET["key_search"]);
        if(empty($key_search)){
            header('location: index.php?url=Products/index');
        }else{
            $products = $this->model("Admin/ProductsModel")->search($key_search);
            $data = [
                "products" => $products
            ];
            $this->view("Admin/Products/search", $data);
        }
    }
}
