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
                    <h1 class="text-center text-uppercase h3 py-3">Đăng nhập</h1>
                <div class="mb-3">
                    <!-- <label for="exampleInputEmail1" class="form-label">Email</label> -->
                    <input name="email" type="email" value="<?php if(isset($email)){echo $email;} ?>" placeholder="Email" class="form-control" id="exampleInputEmail1">
                    <div class="has-err">
                        <span><?php if(isset($err_email)){echo $err_email;}?></span>
                    </div>
                </div>
                <div class="mb-3">
                    <!-- <label for="exampleInputPassword1" class="form-label">Mật khẩu</label> -->
                    <input name="password" type="password" value="<?php if(isset($password)){echo $password;} ?>" placeholder="Mật khẩu" class="form-control" id="exampleInputPassword1">
                    <div class="has-err">
                        <span><?php if(isset($err_password)){echo $err_password;}?></span>
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input name="retype_password" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                </div>
                <div class="mb-3 d-grid gap-2">
                    <button name="login" class="btn btn-primary" type="submit">Đăng nhập</button>
                </div>
                <div class="mb-3 text-center">
                    <a href="#">Quên mật khẩu</a>
                </div>
                <div class="mb-3 text-center">
                    <hr>
                </div>
                <div class="mb-3 d-grid gap-2 col-6 mx-auto" >
                    <button name="register_in_login" class="btn btn-primary" type="submit" style="background-color: #42b72a; border: 0px;">Đăng ký</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>