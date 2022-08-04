<?php
class Users extends Controller{
    function index($num_page = 1){
        $limit = 10;
        $count_users = $this->model("Admin/UsersModel")->count_users();
        if(isset($_POST["limit_page_user"])){
            $_SESSION["limit_page_user"] = $_POST["limit_page_user"];
            header('location: index.php?url=users/index/1');
        }else if(isset($_SESSION["limit_page_user"])){
            $key_search = "";
            if(isset($_POST["btn_search"])){
                $key_search = $_POST["key_search"];
            }
            $limit = $_SESSION["limit_page_user"];
            $total_page = ceil($count_users / $limit);
            $start = ($num_page - 1) * $limit;
            $users = $this->model("Admin/UsersModel")->show_users($start, $limit, $key_search);
            $data = [
                "users" => $users,
                "total_page" => $total_page
            ];
            $this->view("Admin/AdminUsers/AdminUsers", $data);
        }else{
            $key_search = "";
            if(isset($_POST["btn_search"])){
                $key_search = $_POST["key_search"];
            }
            $total_page = ceil($count_users / $limit);
            $start = ($num_page - 1) * $limit;
            $users = $this->model("Admin/UsersModel")->show_users($start, $limit,$key_search);
            $data = [
                "users" => $users,
                "total_page" => $total_page
            ];
            $this->view("Admin/AdminUsers/AdminUsers", $data);
        }
    }

    function trash_users(){
        $users_trash = $this->model("Admin/UsersModel")->show_users_trash();
        $data = [
            'users_trash' => $users_trash
        ];
        $this->view("Admin/AdminUsers/AdminUsersTrash", $data);
    }

    function delete_user($id_user){
        $this->model("Admin/UsersModel")->delete_user($id_user);
        header('location: index.php?url=users/index');
    }

    function un_delete_user($id_user){
        $this->model("Admin/UsersModel")->un_delete_user($id_user);
        header('location: index.php?url=users/trash_users');
    }

    function update_user($id_user){
        $user_old = $this->model("Admin/UsersModel")->show_user_old($id_user);
        $full_roles = $this->model("Admin/UsersModel")->show_full_roles();
        $err = [];
        $data_update_user = [];
        if(isset($_POST["update_user"])){
            $update_full_name_user = trim($_POST["update_full_name_user"]);
            $update_email_user = trim($_POST["update_email_user"]);
            $update_phone_number_user = trim($_POST["update_phone_number_user"]);
            $update_address_user = trim($_POST["update_address_user"]);
            $update_role_id_user = trim($_POST["update_role_id_user"]);
            $data_update_user = [
                "id_user" => $id_user,
                "update_full_name_user" => $update_full_name_user,
                "update_email_user" => $update_email_user,
                "update_phone_number_user" => $update_phone_number_user,
                "update_address_user" => $update_address_user,
                "update_role_id_user" => $update_role_id_user
            ];

            if(empty($update_full_name_user)){
                $err["update_full_name_user_err"] = "Họ và tên không được để trống";
            }
            if(empty($update_email_user)){
                $err["update_email_user_err"] = "Email không được để trống";
            }
            if(empty($update_phone_number_user)){
                $err["update_phone_number_user_err"] = "Số điện thoại không được để trống";
            }
            if(empty($update_address_user)){
                $err["update_address_user_err"] = "Địa chỉ không được để trống";
            }
            if($update_email_user != $user_old->email){
                $check_email_user_update = $this->model("Admin/UsersModel")->check_email_user_update($update_email_user);
                if(!empty($check_email_user_update)){
                    $err["update_email_user_err"] = "Email đã tồn tại";
                }
            }
            
            if(empty($err)){
                $this->model("Admin/UsersModel")->update_user($data_update_user);
                header("location: index.php?url=users/index");
            }
        }
        $data = [
            "data_update_user" => $data_update_user,
            "full_roles" => $full_roles,
            "user_old" => $user_old,
            "err" => $err
        ];
        $this->view("Admin/AdminUsers/AdminUpdateUser", $data);
    }
}
?>