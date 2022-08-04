<?php
class Roles extends Controller{
    function index($num_page = 1){
        $limit = 10;
        $count_roles = $this->model("Admin/RolesModel")->count_roles();
        if(isset($_POST["limit_page_role"])){
            $_SESSION["limit_page_role"] = $_POST["limit_page_role"];
            header('location: index.php?url=roles/index/1');
        }else if(isset($_SESSION["limit_page_role"])){
            $limit = $_SESSION["limit_page_role"];
            $total_page = ceil($count_roles / $limit);
            $start = ($num_page - 1) * $limit;
            $roles = $this->model("Admin/RolesModel")->show_roles($start, $limit);
            $data = [
                "roles" => $roles,
                "total_page" => $total_page
            ];
            $this->view("Admin/AdminRoles/AdminRoles", $data);
        }else{
            $total_page = ceil($count_roles / $limit);
            $start = ($num_page - 1) * $limit;
            $roles = $this->model("Admin/RolesModel")->show_roles($start, $limit);
            $data = [
                "roles" => $roles,
                "total_page" => $total_page
            ];
            $this->view("Admin/AdminRoles/AdminRoles", $data);
        }
    }

    function trash_roles(){
        $roles_trash = $this->model("Admin/RolesModel")->show_roles_trash();
        $this->view("Admin/AdminRoles/AdminRolesTrash", $roles_trash);
    }

    function un_delete_role($id_role){
        $this->model("Admin/RolesModel")->un_delete_role($id_role);
        header('location: index.php?url=roles/trash_roles');
    }

    function search_role(){
        $key_search = trim($_GET["key_search"]);
        if(empty($key_search)){
            header('location: index.php?url=roles/index');
        }else{
            $search_role = $this->model("Admin/RolesModel")->search_role($key_search);
            $this->view("Admin/AdminRoles/AdminSearchRole", $search_role);
        }
    }

    function add_role(){
        $name_role_err = "";
        $add_name_role = "";
        if(isset($_POST["add_role"])){
            $add_name_role = trim($_POST["add_name_role"]);
            if(empty($add_name_role)){
                $name_role_err = "Tên loại tài khoản không được để trống";
            }else if(!empty($this->model("Admin/RolesModel")->check_add_role($add_name_role))){
                $name_role_err = "$add_name_role đã tồn tại";
            }else{
                $_SESSION['flash_message'] = "Đã thêm $add_name_role";
                $this->model("Admin/RolesModel")->add_role($add_name_role);           
                header('location: index.php?url=roles/index');
            }
        }
        $data = [
            "name_role_err" => $name_role_err,
        ];
        $this->view("Admin/AdminRoles/AdminAddRole", $data);
    }

    function update_role($id_role){
        $name_role_old = $this->model("Admin/RolesModel")->show_name_role_update($id_role);
        $name_role_old = $name_role_old->name;

        $name_role_err = "";
        $update_name_role = trim($_POST["update_name_role"]);
        if(isset($_POST["update_role"])){
            if(empty($update_name_role)){
                $name_role_err = "Tên loại tài khoản không được để trống";
            }else{
                $this->model("Admin/RolesModel")->update_role($id_role, $update_name_role);
                header('location: index.php?url=roles/index');
            }
        }
        $data = [
            "name_role_old" => "$name_role_old",
            "name_role_err" => " $name_role_err"
        ];
        extract($data);
        $this->view("Admin/AdminRoles/AdminUpdateRole", $data);
    }

    function delete_role($id_role){
        $this->model("Admin/RolesModel")->delete_role($id_role);
        header('location: index.php?url=roles/index');
    }
}

?>