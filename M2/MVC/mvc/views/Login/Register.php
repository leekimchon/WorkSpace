<?php
extract($data);
if(isset($err)){
    extract($err);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .has-err{
            color: red;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form class="col-md-5 bg-light p-3 my-3" method="POST">
                    <h1 class="text-center text-uppercase h3 py-3">Đăng ký tài khoản</h1>
                <div class="mb-3">
                    <label for="full_name" class="form-label">Họ và tên</label>
                    <input name="full_name" value="<?php if(isset($full_name)){echo $full_name;} ?>" type="text" class="form-control" id="full_name">
                    <div class="has-err">
                        <span><?php if(isset($err_full_name)){echo $err_full_name;}?></span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" value="<?php if(isset($email)){echo $email;} ?>" type="email" class="form-control" id="exampleInputEmail1">
                    <div class="has-err">
                        <span><?php if(isset($err_email)){echo $err_email;}?></span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputphone_num" class="form-label">Số điện thoại</label>
                    <input name="phone_number" value="<?php if(isset($phone_number)){echo $phone_number;} ?>" type="number" class="form-control" id="exampleInputphone_num">
                    <div class="has-err">
                        <span><?php if(isset($err_phone_number)){echo $err_phone_number;}?></span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputaddress" class="form-label">Địa chỉ</label>
                    <input name="address" value="<?php if(isset($address)){echo $address;} ?>" type="text" class="form-control" id="exampleInputaddress">
                    <div class="has-err">
                        <span><?php if(isset($err_address)){echo $err_address;}?></span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input name="password" value="<?php if(isset($password)){echo $password;} ?>" type="password" class="form-control" id="exampleInputPassword1">
                    <div class="has-err">
                        <span><?php if(isset($err_password)){echo $err_password;}?></span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">Nhập lại mật khẩu</label>
                    <input name="retype_password" value="<?php if(isset($retype_password)){echo $retype_password;} ?>" type="password" class="form-control" id="exampleInputPassword2">
                    <div class="has-err">
                        <span><?php if(isset($err_retype_password)){echo $err_retype_password;}?></span>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                <button name="register" class="btn btn-primary" type="submit" style="background-color: #42b72a; border: 0px;">Đăng ký</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>