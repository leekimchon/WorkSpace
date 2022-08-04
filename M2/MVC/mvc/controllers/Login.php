<?php
class Login extends Controller{
    function register(){
        $err = [];
        $data = [];
        if(isset($_POST["register"])){
            $full_name = $_POST["full_name"];
            $email = $_POST["email"];
            $phone_number = $_POST["phone_number"];
            $address = $_POST["address"];
            $password = $_POST["password"];
            // var_dump($password); die();
            $retype_password = $_POST["retype_password"];

            if(empty($full_name)){
                $err["err_full_name"] = "Chưa nhập họ tên";
            }
            if(empty($email)){
                $err["err_email"] = "Chưa nhập email";
            }
            if(empty($phone_number)){
                $err["err_phone_number"] = "Chưa nhập số điện thoại";
            }
            if(empty($address)){
                $err["err_address"] = "Chưa nhập địa chỉ";
            }
            if(empty($password)){
                $err["err_password"] = "Chưa nhập Mật khẩu";
            }
            if($password != $retype_password){
                $err["err_retype_password"] = "Nhập lại mật khẩu không đúng";
            }

            $check_insert_user = $this->model("LoginModel")->check_insert_user($email);
            if(!empty($check_insert_user)){
                $err["err_email"] = "Email đã được đăng ký";
            }
            if(empty($err)){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $this->model("LoginModel")->insert_user($full_name, $email, $phone_number, $address, $password);
                header('location: index.php?url=login/login');
            }
            $data = [
                "full_name" => $full_name,
                "email" => $email,
                "phone_number" => $phone_number,
                "address" => $address,
                "password" => $password,
                "retype_password" => $retype_password,
                "err" => $err
            ];
        }
        $this->view("Login/Register", $data);
    }

    function login(){
        if(isset($_POST["register_in_login"])){
            header('location: index.php?url=login/register');
        }

        $err = [];
        $data = [];
        if(isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $user = $this->model("LoginModel")->check_Email_login($email);
            if(!empty($user)){
                $check_password = password_verify($password, $user->password);
                if($check_password){
                    $_SESSION["user"] = $user;
                    header('location: index.php?url=admin/home');
                }else{
                    $err['err_password'] = 'Password không đúng';
                }
            }else{
                $err['err_email'] = 'Email không đúng';
            }
            if(empty($email)){
                $err["err_email"] = "Chưa nhập email";
            }
            if(empty($password)){
                $err["err_password"] = "Chưa nhập Mật khẩu";
            }
            $data = [
                'email' => $email,
                'password' => $password,
                'err' => $err
            ];
        }
        $this->view("Login/Login", $data);
    }

    function logout_admin(){
        session_destroy();
        header('location: index.php?url=login/login');
    }
}
?>