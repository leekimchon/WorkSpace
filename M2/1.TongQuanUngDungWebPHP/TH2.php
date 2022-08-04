<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            text-align: center;
        }
        .right{
            float: right;
        }
        form{
            display: inline-block;
            border: 2px solid black;
            border-radius: 10px;
            padding: 10px;
        }
        #test{
            display: inline-block;
        }
        input{
            margin: 2px 0px;
        }
        #show{
            margin: 4px 0px;
        }
    </style>
</head>
<body>
    <div>
        <form action="/BaiTapModule2/1.TongQuanUngDungWebPHP/TH2.php" method="POST">
            <h3>Login</h3>
            <div><span>Email</span> <input class="right" type="text" name="email"></div>
            <div id="test"><span>password</span> <input class="right" type="password" name="password"></div><br>
            <div><input type="submit" value="Login"></div>
            <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $email=$_REQUEST['email'];
                    $password=$_REQUEST['password'];
                    if($email=='admin' && $password=='admin'){
                        echo '<div id="show">Welcome admin to website</div>';
                    }else{
                        echo '<div id="show">Login Error</div>';
                    };
                };
            ?>
        </form>
    </div>
</body>
</html>